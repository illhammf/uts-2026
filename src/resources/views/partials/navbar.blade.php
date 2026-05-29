<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand smoothScroll">{{ $nama }}</a>
        </div>

        <nav class="collapse navbar-collapse" id="rock-navigation">
            <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#work" class="smoothScroll">Keahlian</a></li>
                <li><a href="#portfolio" class="smoothScroll">Project</a></li>
                <li><a href="#resume" class="smoothScroll">Profil</a></li>
                <li><a href="#about" class="smoothScroll">Tentang</a></li>
                <li><a href="#contact" class="smoothScroll">Kontak</a></li>
                <li>
                    <button type="button" @click="darkMode = !darkMode" class="dark-toggle-btn">
                        <span x-show="!darkMode">🌙</span>
                        <span x-show="darkMode">☀️</span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</div>