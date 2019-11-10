<!DOCTYPE html>
<html>
   <head>
      <title>Cartela</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">      
      <link href="links/css/bootstrap.min.css" rel="stylesheet">
      <script src="links/js/bootstrap.bundle.min.js"></script>
      <script src="links/js/jquery.min.js"></script>
      <script src="links/js/bootstrap.min.js"></script>
      <!-- <script src="links/js/jquery-2.1.3.min.js"></script> -->
     
      
      <style type="text/css">
         .cartela {
            padding-top: 1%;
            text-align: center;
         }

         .div_p {
            min-height: 475px;
         }

         .div_bingo {
            font-size: 53px;
         }

         .div_numeros {
            font-size: 38px;
         }

         .div_b {
            background-color: #F0F8FF;
            border-radius: 2px;
            border: #000000 2px solid;
         }

         .div_i {
            background-color: #FFFFFF;
            border-radius: 2px;
            border: #000000 2px solid;
         }

         .div_n {
            background-color: #F0F8FF;
            border-radius: 2px;
            border: #000000 2px solid;
         }

         .div_g {
            background-color: #FFFFFF;
            border-radius: 2px;
            border: #000000 2px solid;
         }

         .div_o {
            background-color: #F0F8FF;
            border-radius: 2px;
            border: #000000 2px solid;
         }

         .div_btn_mais {
            padding-top: 1%;
            text-align: center;
            display: none;
         }

         .div_btn {
            padding-top: 1%;
            text-align: center;
         }

         .div_valor_sorteado {
            text-align: center;
            width: 100%;
            height: 100%;
            background-color: #FFFF00;
            border-radius: 100%;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;

         }

         .valor {
            font-size: 320px;
         }

      </style>

      <script type="text/javascript">
         $(function() {

            let array_todos_numeros = [
                                       1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
                                       16,17,18,19,20,21,22,23,24,25,
                                       26,27,28,29,30,31,32,33,34,35,
                                       36,37,38,39,40,41,42,43,44,45,
                                       46,47,48,49,50,51,52,53,54,55,
                                       56,57,58,59,60,61,62,63,64,65,
                                       66,67,68,69,70,71,72,73,74,75
                                      ]

            var array_b = []
            var array_i = []
            var array_n = []
            var array_g = [] 
            var array_o = [] 
            var conteudo_b = "";
            var conteudo_i = "";
            var conteudo_n = "";
            var conteudo_g = "";
            var conteudo_o = "";

            $("#btn_novo_numero").click(function() {

               let vl = $("#novo_numero").val()

               if (vl == '' || vl == undefined) {
                  alert("Informe um número !")
                  return false
               }

               let retorno = ''
               let add = true

               if (vl <= 15) {

                  if (conteudo_b == '' && array_b == '' && $("#input_b").val() != '' && $("#input_b_conteudo").val() != '') {
                     array_b = $("#input_b").val().split(',')
                     conteudo_b = $("#input_b_conteudo").val()
                  }

                  retorno = adicionaValor(conteudo_b, array_b, vl)

                  if (retorno != 'error') {
                     conteudo_b = retorno
                     $(".b").html(retorno)
                     array_b.push(vl)
                     setLocalStorage('b', array_b)
                  }

               } else if (vl <= 30) {

                  if (conteudo_i == '' && array_i == '' && $("#input_i").val() != '' && $("#input_i_conteudo").val() != '') {
                     array_i = $("#input_i").val().split(',')
                     conteudo_i = $("#input_i_conteudo").val()
                  }

                  retorno = adicionaValor(conteudo_i, array_i, vl)

                  if (retorno != 'error') {
                     conteudo_i = retorno
                     $(".i").html(retorno)
                     array_i.push(vl)
                     setLocalStorage('i', array_i)
                  }

               } else if (vl <= 45) {

                  if (conteudo_n == '' && array_n == '' && $("#input_n").val() != '' && $("#input_n_conteudo").val() != '') {
                     array_n = $("#input_n").val().split(',')
                     conteudo_n = $("#input_n_conteudo").val()
                  }

                  retorno = adicionaValor(conteudo_n, array_n, vl)

                  if (retorno != 'error') {
                     conteudo_n = retorno
                     $(".n").html(retorno)
                     array_n.push(vl)
                     setLocalStorage('n', array_n)
                  }

               } else if (vl <= 60) {
                  
                  if (conteudo_g == '' && array_g == '' && $("#input_g").val() != '' && $("#input_g_conteudo").val() != '') {
                     array_g = $("#input_g").val().split(',')
                     conteudo_g = $("#input_g_conteudo").val()
                  }

                  retorno = adicionaValor(conteudo_g, array_g, vl)

                  if (retorno != 'error') {
                     conteudo_g = retorno
                     $(".g").html(retorno)
                     array_g.push(vl)
                     setLocalStorage('g', array_g)
                  }

               } else if (vl <= 75){
                  
                  if (conteudo_o == '' && array_o == '' && $("#input_o").val() != '' && $("#input_o_conteudo").val() != '') {
                     array_o = $("#input_o").val().split(',')
                     conteudo_o = $("#input_o_conteudo").val()
                  }

                  retorno = adicionaValor(conteudo_o, array_o, vl)

                  if (retorno != 'error') {
                     conteudo_o = retorno
                     $(".o").html(retorno)
                     array_o.push(vl)
                     setLocalStorage('o', array_o)
                  }

               } else {
                  alert('Número inválido')
                  limpaNovoNumero()
                  return false
               }
            })

            $("#btn_excluir_numero").click(function() {
                let vl = $("#novo_numero").val()

                if (vl == '' || vl == undefined) {
                  alert("Informe um número !")
                  return false
               }

                let letra = ''
                let retorno = ''
                let posicao = ''

                letra = retornaLetra(vl)

                if (letra == 'b') {
            
                  posicao = array_b.indexOf(vl)
                  if (posicao > -1) {
                     array_b.splice(posicao,1)
                  } else {
                     alert("Número não encontrado !")
                     limpaNovoNumero()
                     return false
                  }

                  retorno = montaConteudo(array_b)
                  conteudo_b = retorno
                  $(".b").html(retorno)
                  setLocalStorage('b', array_b)

                } else if (letra == 'i') {

                     posicao = array_i.indexOf(vl)
                     if (posicao > -1) {
                        array_i.splice(posicao,1)
                     } else {
                        alert("Número não encontrado !")
                        limpaNovoNumero()
                        return false
                     }
                     
                     retorno = montaConteudo(array_i)
                     conteudo_i = retorno
                     $(".i").html(retorno)
                     setLocalStorage('i', array_i)

                } else if (letra == 'n') {

                     posicao = array_n.indexOf(vl)
                     if (posicao > -1) {
                        array_n.splice(posicao,1)
                     } else {
                        alert("Número não encontrado !")
                        limpaNovoNumero()
                        return false
                     }

                     retorno = montaConteudo(array_n)
                     conteudo_n = retorno
                     $(".n").html(retorno)
                     setLocalStorage('n', array_n)

                } else if (letra == 'g') {
                     
                     posicao = array_g.indexOf(vl)
                     if (posicao > -1) {
                        array_g.splice(posicao,1)
                     } else {
                        alert("Número não encontrado !")
                        limpaNovoNumero()
                        return false
                     }

                     retorno = montaConteudo(array_g)
                     conteudo_g = retorno
                     $(".g").html(retorno)
                     setLocalStorage('g', array_g)
                
                } else if (letra == 'o') {

                     posicao = array_o.indexOf(vl)
                     if (posicao > -1) {
                        array_o.splice(posicao,1)
                     } else {
                        alert("Número não encontrado !")
                        limpaNovoNumero()
                        return false
                     }

                     retorno = montaConteudo(array_o)
                     conteudo_o = retorno
                     $(".o").html(retorno)
                     setLocalStorage('o', array_o)

                } else {
                  alert('Número não encontrado')
                  limpaNovoNumero()
                  return false
                }

                limpaNovoNumero()
            })

            $("#btn_alterar_numero").click(function() {
               let de = ''
               let para = ''
               let letra_de = ''
               let letra_para = ''
               let letra_unica = false
               let retorno = ''
               let posicao = ''

               de = $("#alterar_de").val()
               para = $("#alterar_para").val()

               if (de == '' || de == undefined || para == '' || para == undefined) {
                  alert("Informe o número que deseja alterar !")
                  return false
               }

               letra_de = retornaLetra(de)
               letra_para = retornaLetra(para)

               if (letra_de == letra_para) {
                  letra_unica = true
               }

               if (letra_unica) {
                  if (letra_para == 'b') {

                     posicao = array_b.indexOf(de)
                     if (posicao > -1) {
                        array_b.splice(posicao,1)
                        array_b.push(para)
                     } else {
                        alert("Número não encontrado !")
                        limpaDePara()
                        return false
                     }

                     retorno = montaConteudo(array_b)
                     conteudo_b = retorno
                     $(".b").html(retorno)
                     setLocalStorage('b', array_b)

                  } else if (letra_para == 'i') {

                     posicao = array_i.indexOf(de)
                     if (posicao > -1) {
                        array_i.splice(posicao,1)
                        array_i.push(para)
                     } else {
                        alert("Número não encontrado !")
                        limpaDePara()
                        return false
                     }

                     retorno = montaConteudo(array_i)
                     conteudo_i = retorno
                     $(".i").html(retorno)
                     setLocalStorage('i', array_i)

                  } else if (letra_para == 'n') {

                     posicao = array_n.indexOf(de)
                     if (posicao > -1) {
                        array_n.splice(posicao,1)
                        array_n.push(para)
                     } else {
                        alert("Número não encontrado !")
                        limpaDePara()
                        return false
                     }

                     retorno = montaConteudo(array_n)
                     conteudo_n = retorno
                     $(".n").html(retorno)
                     setLocalStorage('n', array_n)

                  } else if (letra_para == 'g') {

                     posicao = array_g.indexOf(de)
                     if (posicao > -1) {
                        array_g.splice(posicao,1)
                        array_g.push(para)
                     } else {
                        alert("Número não encontrado !")
                        limpaDePara()
                        return false
                     }

                     retorno = alteraMesmaColuna(conteudo_g, array_g, de, para)
                     conteudo_g = retorno
                     $(".g").html(retorno)
                     setLocalStorage('g', array_g)

                  } else if (letra_para == 'o') {

                     posicao = array_o.indexOf(de)
                     if (posicao > -1) {
                        array_o.splice(posicao,1)
                        array_o.push(para)
                     } else {
                        alert("Número não encontrado !")
                        limpaDePara()
                        return false
                     }

                     retorno = alteraMesmaColuna(conteudo_o, array_o, de, para)
                     conteudo_o = retorno
                     $(".o").html(retorno)
                     setLocalStorage('o', array_o)

                  } else {
                     alert("Número não encontrado !")
                     limpaDePara()
                     return false
                  }
               
                  limpaDePara()
                  $("#ultimo_numero").val(para)
               
               } else {

                  switch(letra_de) {
                     case 'b':

                        posicao = array_b.indexOf(de)
                        if (posicao > -1) {
                           array_b.splice(posicao,1)
                        } else {
                           alert("Número não encontrado !")
                           limpaDePara()
                           return false
                        }

                        retorno = montaConteudo(array_b)
                        conteudo_b = retorno
                        $(".b").html(retorno)
                        setLocalStorage('b', array_b)
                        break
                     case 'i':

                        posicao = array_i.indexOf(de)
                        if (posicao > -1) {
                           array_i.splice(posicao,1)
                        } else {
                           alert("Número não encontrado !")
                           limpaDePara()
                           return false
                        }

                        retorno = montaConteudo(array_i)
                        conteudo_i = retorno
                        $(".i").html(retorno)
                        setLocalStorage('i', array_i)
                        break
                     case 'n':

                        posicao = array_n.indexOf(de)
                        if (posicao > -1) {
                           array_n.splice(posicao,1)
                        } else {
                           alert("Número não encontrado !")
                           limpaDePara()
                           return false
                        }

                        retorno = montaConteudo(array_n)
                        conteudo_n = retorno
                        $(".n").html(retorno)
                        setLocalStorage('n', array_n)
                        break
                     case 'g':

                        posicao = array_g.indexOf(de)
                        if (posicao > -1) {
                           array_g.splice(posicao,1)
                        } else {
                           alert("Número não encontrado !")
                           limpaDePara()
                           return false
                        }

                        retorno = montaConteudo(array_g)
                        conteudo_g = retorno
                        $(".g").html(retorno)
                        setLocalStorage('g', array_g)
                        break
                     case 'o':

                        posicao = array_o.indexOf(de)
                        if (posicao > -1) {
                           array_o.splice(posicao,1)
                        } else {
                           alert("Número não encontrado !")
                           limpaDePara()
                           return false
                        }

                        retorno = montaConteudo(array_o)
                        conteudo_o = retorno
                        $(".o").html(retorno)
                        setLocalStorage('o', array_o)
                        break
                     default:
                        alert("Número não encontrado !")
                  }

                  switch(letra_para) {
                     case 'b':
                        retorno = adicionaValor(conteudo_b, array_b, para, true)

                        if (retorno != 'error') {
                           conteudo_b = retorno
                           $(".b").html(retorno)
                           array_b.push(para)
                           setLocalStorage('b', array_b)
                        }
                        break
                     case 'i':
                        retorno = adicionaValor(conteudo_i, array_i, para, true)

                        if (retorno != 'error') {
                           conteudo_i = retorno
                           $(".i").html(retorno)
                           array_i.push(para)
                           setLocalStorage('i', array_i)
                        }
                        break
                     case 'n':
                        retorno = adicionaValor(conteudo_n, array_n, para, true)

                        if (retorno != 'error') {
                           conteudo_n = retorno
                           $(".n").html(retorno)
                           array_n.push(para)
                           setLocalStorage('n', array_n)
                        }
                        break
                     case 'g':
                        retorno = adicionaValor(conteudo_g, array_g, para, true)

                        if (retorno != 'error') {
                           conteudo_g = retorno
                           $(".g").html(retorno)
                           array_g.push(para)
                           setLocalStorage('g', array_g)
                        }
                        break
                     case 'o':
                        retorno = adicionaValor(conteudo_o, array_o, para, true)

                        if (retorno != 'error') {
                           conteudo_o = retorno
                           $(".o").html(retorno)
                           array_o.push(para)
                           setLocalStorage('o', array_o)
                        }
                        break
                     default:
                        alert("Número não encontrado !")
                  }
                  
                  limpaDePara()
                  $("#ultimo_numero").val(para)
               }
            })

            $("#btn_recarregar").click(function() {
               recarregaNumeros()
            })

            $("#btn_nova_cartela").click(function() {
               let conf = confirm("Deseja realmente uma nova cartela ? Isso jogará está cartela fora !")

               if (conf == true) {
                  let letras = ['b','i','n','g','o']

                  $.each(letras, function(index, el) {
                     removeLocalStorage(el)
                  })

                  window.location.href = 'cartela.php'
               }
            })
         })

         function abreModal(v) {
            $('#modalNumeroSorteado').modal('show')
            $(".valor").html(v)
            setTimeout(function () {
                $('#modalNumeroSorteado').modal('hide')
                $("#ultimo_numero").val(v)
                limpaNovoNumero()
            }, 5000);
         }

         function retornaLetra(v) {
            if (v <= 15) {
               return 'b'
            } else if (v <= 30) {
               return 'i'
            } else if (v <= 45) {
               return 'n'
            } else if (v <= 60) {
               return 'g'
            } else if (v <= 75){
               return 'o'
            } else {
               return 'error'
            }
         }

         function montaConteudo(array) {
            let conteudo = ''
            
            $.each(array, function(index, el) {
               if (conteudo == "" || conteudo == undefined) {
                  conteudo = el
               } else {
                  conteudo += ` - ${el}`
               }
            })

            return conteudo
         }

         function adicionaValor(conteudo = null, array = null, vl, alterar = null) {
            let add = true

            $.each(array,function(index, el) {
               if (vl == el) {
                  alert("Número já sorteado !")
                  add = false
                  conteudo = 'error'
               }
            })

            if (add) {
               if (conteudo == '' || conteudo == undefined) {
                  conteudo = vl    
               } else {
                  conteudo += ` - ${vl}` 
               }
            }

            if (add && !alterar) {
               abreModal(vl)
            } else {
               limpaNovoNumero()
            }

            return conteudo
         }

         const limpaNovoNumero = function() {
            $("#novo_numero").val('').focus()
         }

         const limpaDePara = function() {
            $("#alterar_de").val('')
            $("#alterar_para").val('')
         }

         function setLocalStorage(letra, array){    
            localStorage.setItem(letra, array)
         }

         const getLocalStorage = (letra) =>  localStorage.getItem(letra)
         

         function removeLocalStorage(letra){
            localStorage.removeItem(letra)
         }

        function recarregaNumeros() {
            let tem_b = ''
            let tem_i = ''
            let tem_n = ''
            let tem_g = ''
            let tem_o = ''

            tem_b = getLocalStorage('b')
            if (tem_b != null && tem_b != undefined) {
               array_b = tem_b.split(',')
               conteudo_b = montaConteudo(array_b)
               $(".b").html(conteudo_b)
               $("#input_b").val(tem_b)
               $("#input_b_conteudo").val(conteudo_b)
            }

            tem_i = getLocalStorage('i')
            if (tem_i != null && tem_i != undefined) {
               array_i = tem_i.split(',')
               conteudo_i = montaConteudo(array_i)
               $(".i").html(conteudo_i)
               $("#input_i").val(tem_i)
               $("#input_i_conteudo").val(conteudo_i)
            }

            tem_n = getLocalStorage('n')
            if (tem_n != null && tem_n != undefined) {
               array_n = tem_n.split(',')
               conteudo_n = montaConteudo(array_n)                
               $(".n").html(conteudo_n)
               $("#input_n").val(tem_n)
               $("#input_n_conteudo").val(conteudo_n)
            }

            tem_g = getLocalStorage('g')
            if (tem_g != null && tem_g != undefined) {
               array_g = tem_g.split(',')
               conteudo_g = montaConteudo(array_g)
               $(".g").html(conteudo_g)
               $("#input_g").val(tem_g)
               $("#input_g_conteudo").val(conteudo_g)
            }
            
            tem_o = getLocalStorage('o')
            if (tem_o != null && tem_o != undefined) {
               array_o = tem_o.split(',')
               conteudo_o = montaConteudo(array_o)
               $(".o").html(conteudo_o)
               $("#input_o").val(tem_o)
               $("#input_o_conteudo").val(conteudo_o)
            }
        }

      </script>       
   </head>
   <body>
      <div class="container div_container">
         <div class="row cartela div_bingo">
            <div class="col-1"></div>
            <div class="col-2 div_b"><p><b>B</b></p></div>
            <div class="col-2 div_i"><p><b>I</b></p></div>
            <div class="col-2 div_n"><p><b>N</b></p></div>
            <div class="col-2 div_g"><p><b>G</b></p></div>
            <div class="col-2 div_o"><p><b>O</b></p></div>
            <div class="col-1"></div>
         </div>
         <div class="row cartela div_numeros">
            <input type="hidden" name="input_b" id="input_b" value="">
            <input type="hidden" name="input_i" id="input_i" value="">
            <input type="hidden" name="input_n" id="input_n" value="">
            <input type="hidden" name="input_g" id="input_g" value="">
            <input type="hidden" name="input_o" id="input_o" value="">
            <input type="hidden" name="input_b_conteudo" id="input_b_conteudo" value="">
            <input type="hidden" name="input_i_conteudo" id="input_i_conteudo" value="">
            <input type="hidden" name="input_n_conteudo" id="input_n_conteudo" value="">
            <input type="hidden" name="input_g_conteudo" id="input_g_conteudo" value="">
            <input type="hidden" name="input_o_conteudo" id="input_o_conteudo" value="">
            <div class="col-1"></div>
            <div class="col-2 b div_b div_p"></div>
            <div class="col-2 i div_i div_p"></div>
            <div class="col-2 n div_n div_p"></div>
            <div class="col-2 g div_g div_p"></div>
            <div class="col-2 o div_o div_p"></div>
            <div class="col-1"></div>
         </div>
         <div class="row div_btn">
            <div class="col-1"></div>
            <div class="col-4">
               <input type="text" name="novo_numero" id="novo_numero" maxlength="2" size="2" value="">
               <button type="button" class="btn btn-success" id="btn_novo_numero">Adicionar</button>
               <button type="button" class="btn btn-danger" id="btn_excluir_numero">Excluir</button>
               <label>Anterior:</label>
               <input type="text" name="ultimo_numero" id="ultimo_numero" maxlength="2" size="2" value="">
            </div>
            <div class="col-3">
               <label>De:</label>
               <input type="text" name="alterar_de" id="alterar_de" maxlength="2" size="2" value="">
               <label>Para:</label>
               <input type="text" name="alterar_para" id="alterar_para" maxlength="2" size="2" value="">
               <button type="button" class="btn btn-info" id="btn_alterar_numero">Alterar</button>
            </div>
            <div class="col-3">
               <button type="button" class="btn btn-warning" id="btn_recarregar" >Recarregar</button>
               <button type="button" class="btn btn-dark" id="btn_nova_cartela" >Nova Cartela</button>
            </div>
            <div class="col-1"></div>
         </div>

         <!-- Modal -->
         <div class="modal fade" id="modalNumeroSorteado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content div_valor_sorteado ">
               <div class="modal-body valor">
               </div>
             </div>
           </div>
         </div>
      </div>
   </body>
</html>
