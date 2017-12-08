<!DOCTYPE html>

<head>

  <?php $home = get_template_directory_uri(); ?>
  <meta charset="utf-8"/>
   
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?=$home;?>/style.css" /> 
  <link rel="stylesheet" href="<?$home;?>/css/bootstrap_css" />
 

 <?php wp_head(); ?> <!-- dashboard wordpress -->
</head>

<body>

      <!-- Navigation -->
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-light">  
        <div class="container">

          <!-- Logo -->
          <a href="index.html" title="Home"><img src="#" width="60" height="50" alt="logotipo do TerraMa2"></a>

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sobre
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownAbout">
                  <a class="dropdown-item" href="about.html">TerraMA²</a>
                  <a class="dropdown-item" href="team.html">Equipe</a>
                  <a class="dropdown-item" href="architecture.html">Arquitetura</a>
                  <a class="dropdown-item" href="contact.html">Contato</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownProjects" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Projetos
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownAbout">
                  <a class="dropdown-item" href="projects.html">Projetos</a>
                  <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="right" title="Em Breve!">Estudos de Casos</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="download.html">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="documentation.html">Documentação</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom" title="Em Breve!">Cursos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Em Breve!"><img src="img/flagenglish.png" alt="bandeira da Inglaterra"></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Em Breve!"><img src="img/flagespanha.png" alt="bandeira da Espanha"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /.Navigation -->