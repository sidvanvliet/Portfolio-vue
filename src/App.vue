<template>
    <div id="app">

        <div id="sidebar-sm">
            <i class="material-icons" id="toggle-menu">menu</i>
        </div>

        <div id="mobile-menu">
            <i class="material-icons" onclick="closeMenu()">close</i>

            <div class="sidebar-item-sm">
                <router-link to="/" onclick="closeMenu()">Home</router-link>
            </div>

            <div class="sidebar-item-sm">
                <router-link to="/resume" onclick="closeMenu()">Résumé</router-link>
            </div>

            <div class="sidebar-item-sm">
                <router-link to="/portfolio" onclick="closeMenu()">Portfolio</router-link>
            </div>

            <div class="sidebar-item-sm">
                <router-link to="/contact" onclick="closeMenu()">Contact</router-link>
            </div>

            <div class="sidebar-item-sm sidebar-item-xs">
                <router-link to="/privacy" onclick="closeMenu()">Privacy Policy</router-link>
            </div>
        </div>

        <div id="sidebar">
            <div class="sidebar-item">
                <router-link to="/">Home</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/resume">Résumé</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/portfolio">Portfolio</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/contact">Contact</router-link>
            </div>
            <!--<div class="sidebar-item special-link">-->
                <!--<div class="sidebar-item">-->
                    <!--<a href="media-centre/index.html">Media Centre</a>-->
                <!--</div>-->
            <!--</div>-->
            <div class="sidebar-item special-link">
                <div class="sidebar-item">
                    <router-link to="/privacy">Privacy Policy</router-link>
                </div>
            </div>
        </div>

        <main>

            <router-view/>

        </main>

    </div>
</template>

<script>
    require('@/assets/css/style.css');
    $(document).on('click', '#toggle-menu', function(){
        $('#mobile-menu').fadeIn(300);
        $('main').css('display', 'none');
    });
</script>