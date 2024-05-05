<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Hamed Slim</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Blank</title>
  <link href="style.css" rel="stylesheet">
</head>
<body class="app">
  <div id="loader"><div class="spinner"></div></div>

  <div>
    <div class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-logo">
          <div class="peers ai-c fxw-nw">  
            <div class="peer peer-greed">
              <a class="sidebar-link td-n" href="../film controller/films-table.php">
                <div class="peers ai-c fxw-nw">
                  <div class="peer">
                    <div class="logo">
                      <img style="margin:0px;" width="100" height="100" src="https://img.freepik.com/vecteurs-premium/logo-bobine-film-vecteur-logo-cinema_472355-391.jpg?w=740" alt="">
                    </div>
                  </div>
                  <div style="margin: 30px" class="peer peer-greed"><h5 class="lh-1 mB-0 logo-text">CLICK&FLICK</h5></div>
                </div>
              </a>
            </div><div class="peer">
              <div class="mobile-toggle sidebar-toggle">
                <a href="" class="td-n">
                  <i class="ti-arrow-circle-left">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div><ul class="sidebar-menu scrollable pos-r">
          <li class="nav-item mT-30 actived">
            <a class="sidebar-link" href="index.html">
              <span class="icon-holder">
                <i class="c-blue-500 ti-home"></i>
              </span><span class="title">Dashboard</span>
            </a>
          </li>
          
          
      
          
          <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span><span class="title">Tables</span> <span class="arrow"><i class="ti-angle-right"></i></span>
            </a><ul class="dropdown-menu">
              <li>
                <a class="sidebar-link" href="../film controller/films-table.php">Films Table</a>
              </li>
              <li>
                <a class="sidebar-link" href="../projection controller/projections-table.php">Projections Table</a>
              </li>
              <li>
                <a class="sidebar-link" href="datatable.html">Tickets Table</a>
              </li>
              <li>
                <a class="sidebar-link" href="../clients controller/clients-table.php">Clients Table</a>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div><div class="page-container">
      <div class="header navbar">
        <div class="header-container">
          <ul class="nav-left">
            <li>
              <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                <i class="ti-menu"></i>
              </a>
            </li>
            <li class="search-box">
              <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                <i class="search-icon ti-search pdd-right-10">
                </i> <i class="search-icon-close ti-close pdd-right-10"></i>
              </a>
            </li>
            <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
          </ul>
          <ul class="nav-right">

            <li class="dropdown">
              <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                <div class="peer mR-10">
                  <img class="w-2r bdrs-50p" src="https://img.favpng.com/0/10/8/user-logo-computer-icons-png-favpng-iqQGZY6XqNa2Qy3r2CCZLHpiz.jpg" alt="">
                </div><div class="peer">
                  <span class="fsz-sm c-grey-900"><?php echo $_SESSION['username'] ?></span>
                </div>
              </a><ul class="dropdown-menu fsz-sm">
                <li>
                  <a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-user mR-10">
                    </i> <span><?php echo $_SESSION['type'] ?></span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                <a href="../login/logout.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                  <i class="ti-power-off mR-10"></i> <span>Logout</span>
                </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>

      </div><main class="main-content bgc-grey-100">
        <div id="mainContent">