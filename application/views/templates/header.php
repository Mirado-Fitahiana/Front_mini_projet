<header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a style="height: 72px;" class="navbar-brand mt-2 mt-lg-0" href="#">
                <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="15"
                alt="MDB Logo"
                loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a style="color: rgba(169,99,74,1);text-decoration: none;" class="nav-link" href="<?php echo site_url("details/index") ?>">TABLEAU</a>
                </li>
                <li class="nav-item">
                <a style="color: rgba(169,99,74,1);text-decoration: none;" class="nav-link" href="<?php echo site_url("details/liste_artiste") ?>">ARTISTES</a>
                </li>
                <li class="nav-item">
                <a style="color: rgba(169,99,74,1);text-decoration: none;" class="nav-link" href="<?php echo base_url("landing/index")?>">A PROPOS</a>
                </li>
                <li class="nav-item">
                <a style="color: rgba(169,99,74,1);text-decoration: none;" class="nav-link" href="#footer">CONTACT</a>
                </li>
                <li class="nav-item">
                <a style="color: rgba(169,99,74,1);text-decoration: none;" class="nav-link" href="<?php echo base_url("landing/index")?>">ACCUEIL</a>
                </li>
            </ul>
            <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i style="color: rgba(169,99,74,1);" class="fas fa-shopping-cart"></i>
            </a>
            </div>
            <form class="d-flex input-group w-auto">
                <input
                    type="search"
                    class="form-control rounded"
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="search-addon"
                />
                <span class="input-group-text border-0" id="search-addon">
                    <i style="color: rgba(169,99,74,1);" class="fas fa-search"></i>
                </span>
            </form>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>