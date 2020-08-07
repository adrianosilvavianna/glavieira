$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Qual seu nome meu anjo?",
                    minlength: "Seu nome não é tão curto né?"
                },
                subject: {
                    required: "Qual o assunto?",
                    minlength: "Vamos lá, eu preciso saber sobre o que você quer falar"
                },
                number: {
                    required: "Coloca aí seu telefone pra gente poder falar com você",
                    minlength: "Digita seu número por favor!"
                },
                email: {
                    required: "Seu e-mail por favor!",
                    email: "Tem certeza de que seu e-mail está correto?"
                },
                message: {
                    required: "Escreva pra gente!",
                    minlength: "Continua! Preciso te entender melhor."
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"/contact",
                    success: function() {
                        $('#contactForm')[0].reset();
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find('label').css('cursor','default');  
                            swal({
                                title: "Obrigado!",
                                text: "Entraremos em contato o quanto antes!",
                                icon: "success",
                              });
                              
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            swal({
                                title: "Ops algo está errado",
                                text: "Infelizmente, não conseguimos registrar suas informações tente novamente!",
                                icon: "error",
                              });
                              
                        })
                    }
                })
            }
        })


        $('#subscribeForm').validate({
            rules: {
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {  
                number: {
                    required: "Coloca aí seu telefone pra gente poder falar com você",
                    minlength: "Digita seu número por favor!"
                },
                email: {
                    required: "Seu e-mail por favor!",
                    email: "Tem certeza de que seu e-mail está correto?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"/subscribe",
                    success: function() {
                        $('#subscribeForm')[0].reset();
                        $('#subscribeForm').fadeTo( "slow", 1, function() {
                            $(this).find('label').css('cursor','default');  
                            swal({
                                title: "Obrigado!",
                                text: "Entraremos em contato o quanto antes!",
                                icon: "success",
                              });
                              
                        })
                    },
                    error: function() {
                        $('#subscribeForm').fadeTo( "slow", 1, function() {
                            swal({
                                title: "Ops algo está errado",
                                text: "Infelizmente, não conseguimos registrar suas informações tente novamente!",
                                icon: "error",
                              });
                              
                        })
                    }
                })
            }
        })




    })
        
 })(jQuery)
})