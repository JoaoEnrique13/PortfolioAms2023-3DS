
$(document).ready(function() {
    $(document).on('click', '#add-answer', add_answer) // ADICIONAR RESPOSTA DO QUIZ
    $(document).on('click', '#add-answer-edit', add_answer_edit) // ADICIONAR RESPOSTA DO QUIZ NA EDIÇÃO
    $(document).on('click', '.remove-answer', remove_answer) // REMOVE RESPOSTA DO QUIZ
    $(document).on('click', '.remove-answer-edit', remove_answer_edit) // REMOVE RESPOSTA DO QUIZ NA EDIÇÃO
    $(document).on('click', '.btn-send-answer', send_answer); // ENVIAR RESPOSTA
    $(document).on('click', '.view-password', showPassword); // VISUALIZAR SENHA
    image_upload_account() // PREVIEW DE IMAGEM DA CONTA
    image_upload_quiz() // PREVIEW DE IMAGEM DO QUIZ
    menu_carrousel() //seleciona link do nav de acordo com o slide do carousel
    pause_background_video()//PAUSAR VIDEO DE FUNDO DA INDEX
    pause_background_video_two()//PAUSAR VIDEO DE FUNDO DA INDEX
    
    // IMPEDE DE DESATIVAR TODOS OS SWITCHS DE RESPOSTA CORRETA (PRECISA TER UMA RESPOSTA CORRETA)
    $('.form-radio').on('click', function(event) {
      if (!$(this).is(':checked')) {
        event.preventDefault();
      }
    });

    // DESATIVAR OS OUTROS SWITCHS AO ATIVAR UM
    $('.form-radio').on('change', function() {
      const answerId = $(this).data('answer-id');
      $('.form-radio').not(this).prop('checked', false);
    });

});

let answerCounter = 2;

// ADICIONAR RESPOSTA 
function add_answer(){
  // Oculta botão de adicionar resposta caso tenha 5 respostas
  if (answerCounter >= 4) {
    $('#add-answer').hide(); // Oculta o botão quando atingir 5 respostas
  }

  const newAnswerDiv = 
    `
    <div class="row" id="answer-${answerCounter}" style="margin-top: 10px">
      <div class="col-9">
          <input required placeholder="Resposta" type="text" name="answers[${answerCounter}][text_answer]" class="text-resposta form-control formCriarQuiz">
      </div>
      <div class="col">
          <div class="form-check form-switch">
              <div class="form-check">
                  <input class="form-check-input form-radio" type="checkbox" name="answers[${answerCounter}][correct_answer]" data-answer-id="${answerCounter}" id="answers-${answerCounter}-correct">
                  <label class="form-check-label label-correct" for="answers-${answerCounter}-correct">Correta</label>
              </div>
          </div>
      </div>
      <div class="col col-remove-answer">
        <img src="${baseUrl}img/x.png" data-answer="${answerCounter}" class="remove-answer">
      </div>
  </div>
    `;
  // Adiciona a nova div de resposta ao elemento com ID 'answers'
  $("#answers").append(newAnswerDiv);
  
  answerCounter++;

  // IMPEDDE DE DESATIVAR TODOS OS SWITCHS DE RESPOSTA CORRETA (PRECISA TER UMA RESPOSTA CORRETA)
  $('.form-radio').on('click', function(event) {
    if (!$(this).is(':checked')) {
      event.preventDefault();
    }
  });

  // DESATIVAR OS OUTROS SWITCHS AO ATIVAR UM
  $('.form-radio').off('change').on('change', function() {
    const answerId = $(this).data('answer-id');
    $(`input[type=checkbox]`).not(this).prop('checked', false);
  });
}

// ADICIONAR RESPOSTA NA EDIÇÃO
function add_answer_edit(){
  // Oculta botão de adicionar resposta caso tenha 5 respostas
  answerCounter = document.querySelectorAll(".answer-edit").length
  // alert(answerCounter.count)

  if (answerCounter >= 4) {
    $('#add-answer-edit').hide(); // Oculta o botão quando atingir 5 respostas
  }

  const newAnswerDiv = 
    `
    <div class="row answer-edit" id="answer-${answerCounter}" style="margin-top: 10px">
      <div class="col-9">
          <input required placeholder="Resposta" type="text" name="answers[${answerCounter}][text_answer]" class="text-resposta form-control formCriarQuiz">
      </div>
      <div class="col">
          <div class="form-check form-switch">
              <div class="form-check">
                  <input class="form-check-input form-radio" type="checkbox" name="answers[${answerCounter}][correct_answer]" data-answer-id="${answerCounter}" id="answers-${answerCounter}-correct">
                  <label class="form-check-label label-correct" for="answers-${answerCounter}-correct">Correta</label>
              </div>
          </div>
      </div>
      <div class="col col-remove-answer">
        <img src="${baseUrl}img/x.png" data-answer="${answerCounter}" class="remove-answer-edit">
      </div>
  </div>
    `;
  // Adiciona a nova div de resposta ao elemento com ID 'answers'
  $("#answers").append(newAnswerDiv);
  
  answerCounter++;

  // IMPEDDE DE DESATIVAR TODOS OS SWITCHS DE RESPOSTA CORRETA (PRECISA TER UMA RESPOSTA CORRETA)
  $('.form-radio').on('click', function(event) {
    if (!$(this).is(':checked')) {
      event.preventDefault();
    }
  });

  // DESATIVAR OS OUTROS SWITCHS AO ATIVAR UM
  $('.form-radio').off('change').on('change', function() {
    const answerId = $(this).data('answer-id');
    $(`input[type=checkbox]`).not(this).prop('checked', false);
  });
}

// REMOVER RESPOSTA 
function remove_answer(){
  // mostra botão de adicionar resposta caso tenha menos de 5 respostas
  if (answerCounter >= 5) {
    $('#add-answer').show(); // mostra botão se tiver menos que 5 respostas
    $('#add-answer-edit').show(); // mostra botão se tiver menos que 5 respostas
  }

  answerCounter --; //diminui contador da resposta

  answerNumber = $(this).data('answer');
  answer = $(`#answer-${answerNumber}`).remove()

  check_correct()//AO REMOVER PERGUNTA VERIFICA SE É A PERGUNTA COM CORRETA PARA REMOVER E SELECIONAR OUTRA COMO CORRETA
}
// REMOVER RESPOSTA 
function remove_answer_edit(){
  // mostra botão de adicionar resposta caso tenha menos de 5 respostas
  if (answerCounter <= 5) {
    $('#add-answer-edit').show(); // mostra botão se tiver menos que 5 respostas
  }

  answerCounter --; //diminui contador da resposta

  answerNumber = $(this).data('answer');
  answer = $(`#answer-${answerNumber}`).remove()

  check_correct()//AO REMOVER PERGUNTA VERIFICA SE É A PERGUNTA COM CORRETA PARA REMOVER E SELECIONAR OUTRA COMO CORRETA
}



//AO REMOVER PERGUNTA VERIFICA SE É A PERGUNTA COM CORRETA PARA REMOVER E SELECIONAR OUTRA COMO CORRETA
function check_correct(){
  var checkboxes = $('.form-radio');

  // Verifique se pelo menos um checkbox está selecionado
  var peloMenosUmSelecionado = false;

  checkboxes.each(function() {
      if ($(this).prop('checked')) {
          peloMenosUmSelecionado = true;
          return false; // Saia do loop quando encontrar um selecionado
      }
  });

  // Se nenhum checkbox estiver selecionado, selecione o primeiro
  if (!peloMenosUmSelecionado) {
      checkboxes.first().prop('checked', true);
  }
}


// PREVIEW DA IMAGEM DA CONTA
function image_upload_account(){
  imageUpload = document.querySelector('.img-account-preview'); //campo de imagem
  divErro = document.querySelector('.erro-img-account')

  //caso tenha escolhido uma imagem
  if(imageUpload){
      imagemProfile = document.getElementById('img-profile');
      // Listen for changes in the input file
      imageUpload.addEventListener('change', function() {
      // Get the selected file
      const file = this.files[0];
      
      // Check if a file is selected
      if (file) {
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        labelFormCriarQuizImg = document.querySelector('.filtro-img');

        if (!allowedExtensions.exec(file.name)) {
          imagemProfile.value = ''; // Limpa o campo de entrada de arquivo
            // Modificação para evitar o erro
            const divErro = document.querySelector('.erro-img-quiz');

            labelFormCriarQuizImg.style.border = "1px solid #dc3545";

            if (divErro) {
                divErro.style.display = "block";
            }
        }
          // Create a FileReader object
          const reader = new FileReader();
      
          // Set up the reader to load the image
          reader.onload = function(e) {
          imagemProfile.src = e.target.result
          //   previewContainer.appendChild(img);
          };
      
          // Read the selected file as a Data URL
          reader.readAsDataURL(file);
      }
      });
  }
}

// PREVIEW DE IMAGEM DO QUIZ
function image_upload_quiz(){
  // Campo de imagem
  imageUpload = document.querySelector('.img-quiz-preview');
  labelFormCriarQuizImg = document.querySelector('.formCriarQuizImg');
  divErro = document.querySelector('.erro-img-quiz')
  
  
  if(imageUpload){
      // Listen for changes in the input file
      imageUpload.addEventListener('change', function() {
      
        // Arquivo selecionado
        const file = this.files[0];
        
        // Check if a file is selected
        if (file) {

          var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

          if (!allowedExtensions.exec(file.name)) {
              imageUpload.value = ''; // Limpa o campo de entrada de arquivo
              labelFormCriarQuizImg.classList.add('is-invalid')
              divErro.style.display = "block"
          }

            // Create a FileReader object
            const reader = new FileReader();
        
            // Set up the reader to load the image
            reader.onload = function(e) {
            // Create an image element
            //   const img = document.createElement('img');
        
            // Set the source of the image to the loaded file
            //   img.src = e.target.result;
            // Append the image to the preview container
            const previewContainer = document.querySelector('.formCriarQuizImg');
            previewContainer.style.display = "block";
            previewContainer.style.backgroundImage = "url('" + e.target.result + "')";
            previewContainer.style.backgroundSize = "cover";
            $(".formCriarQuizImg").html("");
            //   previewContainer.appendChild(img);
            };
        
            // Read the selected file as a Data URL
            reader.readAsDataURL(file);
        }
      });
  }
}

// CAROUSEL MATERIAL
function menu_carrousel(){
  $('#carouselExample').on('slid.bs.carousel', function (event) {
    var slideAtual = $(event.relatedTarget).index();
    console.log('Slide atual: ' + slideAtual);
    $('.link-material').removeClass('active')
    $('#' + slideAtual).addClass('active')
    // Faça o que você quiser com o índice do slide atual
  });
}

// VERIFICAR SE RESPOSTA ESTÁ CERTA OU ERRADA
function send_answer(event) {
  event.preventDefault(); // Impede o envio padrão do formulário

  var form = $('.form-send-answer'); // Obtém o formulário atual
  var url = form.attr('action'); // Obtém o URL do atributo 'action' do formulário
  
  
  var respostaEscolhida = $('input[name="resposta"]:checked').val();

  $.ajax({
    url: url,
    method: 'POST',
    dataType: 'json',
    data: form.serialize(),
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

  success: function(data) {
    respostaEscolhida.style.backgroundColor = "red";
      
  },

  error: function(err) {
      console.log(err);
  }
  });
}

//PAUSAR VIDEO DE FUNDO DA INDEX
function pause_background_video(){
  // Obtém o elemento de vídeo pelo seu ID
  if(document.getElementById("video-fundo-home")){
    var videoElement = document.getElementById("video-fundo-home");
    
    // Define um evento para ser disparado quando o vídeo for carregado e pronto para reprodução
    videoElement.addEventListener("loadedmetadata", function() {
        // Inicia a reprodução
        videoElement.play();
    
        // Define um timeout para pausar o vídeo após 1 segundo
        setTimeout(function() {
            videoElement.pause();
        }, 5000);
    });
  }
}

//PAUSAR VIDEO DE FUNDO DA INDEX
function pause_background_video_two(){
  // Obtém o elemento de vídeo pelo seu ID
  if(document.getElementById("video-fundo-home-dois")){
    var videoElement = document.getElementById("video-fundo-home-dois");
    
    // Define um evento para ser disparado quando o vídeo for carregado e pronto para reprodução
    videoElement.addEventListener("loadedmetadata", function() {
        // Inicia a reprodução
        videoElement.play();
    
        // Define um timeout para pausar o vídeo após 1 segundo
        setTimeout(function() {
            videoElement.pause();
        }, 1000);
    });
  }
}

//Mostra link do CRUD do quiz ao clicar na imagem do quiz
function showLink(id_quiz) {
  var links = document.querySelectorAll('.conf-quiz');
  links.forEach((link) => link.style.display = 'none');
  var link = document.getElementById('conf-quiz-'+id_quiz);

  if(link.style.display == 'flex'){
      link.style.display = 'none'
  }else{
      link.style.display = 'flex'
  }
}

//BOTÃO PARA MOSTRAR SENHA    
function showPassword() {//Botao de olho para mostrar e esconder a senha (pagina entrar)
  var idIMG = this.id

  
  if(idIMG == 'view-password'){//Campo senha
    var senha = document.querySelector("#password");
    var imgShow = document.querySelector("#view-password");
  }else{//Campo confirmação de senha
    var senha = document.querySelector("#password_confirmation");
    var imgShow = document.querySelector("#view-password-confirm");
  }

  if (senha.type === "password") {
    senha.type = "text";
    imgShow.src = "../img/eye-off.svg"
  } else {
    senha.type = "password";
    imgShow.src = "../img/eye.svg"
  }
    
}