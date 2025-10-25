<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
    /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
    .w3-sidebar {
    width: 120px;
    }
    /*Define Fonte para todas as tagslistadas abaixo*/body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    font-family: "Montserrat", sans-serif
    }
    </style>
</head>

<body class="w3-light-grey">

    <nav class="w3-sidebar w3-bar-block w3-center w3-blue ">
        
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-textlight-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>

        <a href="#eProfissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-briefcase w3-xxlarge"></i>
            <p>Experiência Profissional</p>
        </a>

        <a href="#oFormacoes" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-certificate w3-xxlarge"></i>
            <p>Outras Formações</p>
        </a>
    </nav>
    
    <header class="w3-container w3-padding-32 w3-center " id="home">
        <h1>
            <img src="../img/foto-lata.png" alt="Logo" class="w3-image" width="25%">
            <br>
        </h1>
        <a class="w3-text-cyan" href="http://www.canva.com">Designed by Tatiani Cunha / Canva</a>
        <br>
        <br>
        <h1 class="w3-text-cyan">SISTEMA DE CURRÍCULOS</h1>
    </header>

    <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">

        <h2 class="w3-text-cyan w3-center">Dados Pessoais</h2>
        
        <form action="" method="post" class="w3-light-grey w3-text-blue w3-margin w3-padding" style="width:70%; margin: 0 auto;">
            <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:15%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-user"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:15%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-id-card"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF" value="">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:15%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-calendar"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="Data de Nascimento" value="">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:15%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-envelope"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmail" type="email" placeholder="E-mail" value="">
                </div>
            </div>
            
            <div class="w3-row w3-section w3-center">
                <div class="w3-center">
                    <button name="btnAddPessoa" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>

       </form>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
        
        <h2 class="w3-text-cyan w3-center">Formação</h2>    
        
        <form action="" method="post" class="w3-light-grey w3-text-blue w3-margin w3-padding" style="width:70%; margin: 0 auto;">
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:48%;">
                    <div class="w3-margin-bottom" style="font-weight: bold;">Data Inicial</div>
                    <div class="w3-row">
                        <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                        </div>
                    </div>
                </div>
                
                <div class="w3-col" style="width:4%;"></div>
                
                <div class="w3-col" style="width:48%;">
                    <div class="w3-margin-bottom" style="font-weight: bold;">Data Final</div>
                    <div class="w3-row">
                        <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:10%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                </div>
            </div>

            <div class="w3-row w3-section w3-center">
                <div class="w3-center">
                    <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>
    
        <div class="w3-container" style="width: 70%; margin: 0 auto;">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
   


        <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
            <br>
            <h2 class="w3-text-cyan w3-center">Experiência Profissional</h2>
        
            <form action=" " method="post" class="w3-light-grey w3-text-blue w3-margin w3-padding" style="width: 70%; margin: 0 auto;">
                
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:48%;">
                        <div class="w3-margin-bottom" style="font-weight: bold;">Data Inicial</div>
                        <div class="w3-row">
                            <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="w3-col" style="width:4%;"></div>
                    
                    <div class="w3-col" style="width:48%;">
                        <div class="w3-margin-bottom" style="font-weight: bold;">Data Final</div>
                        <div class="w3-row">
                            <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:10%; text-align:center; padding-top:8px;">
                        <i class="w3-xxlarge fa fa-building"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Empresa: Ex.: Centro Paula Souza">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:10%; text-align:center; padding-top:8px;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-center">
                        <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="w3-container" style="width: 70%; margin: 0 auto;">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Empresa</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>    
                    <tbody>
                        <!-- Código que será incluído na próxima agenda -->
                    </tbody>
                </table>
            </div>
        </div>



        <div class="w3-padding-128 w3-content w3-text-grey" id="outrasFormacoes">
        
        <h2 class="w3-text-cyan w3-center">Outras Formações</h2>    
        
        <form action="" method="post" class="w3-light-grey w3-text-blue w3-margin w3-padding" style="width:70%; margin: 0 auto;">
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:48%;">
                    <div class="w3-margin-bottom" style="font-weight: bold;">Data Inicial</div>
                    <div class="w3-row">
                        <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
                        </div>
                    </div>
                </div>
                
                <div class="w3-col" style="width:4%;"></div>
                
                <div class="w3-col" style="width:48%;">
                    <div class="w3-margin-bottom" style="font-weight: bold;">Data Final</div>
                    <div class="w3-row">
                        <div class="w3-col" style="width:20%; text-align:center; padding-top:8px;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:10%; text-align:center; padding-top:8px;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Descrição: Ex.: Ciência da Computação - UNIVESP">
                </div>
            </div>

            <div class="w3-row w3-section w3-center">
                <div class="w3-center">
                    <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>
                    </button>
                </div>
            </div>
        </form>
    
        <div class="w3-container" style="width: 70%; margin: 0 auto;">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
   

</body>
</html>