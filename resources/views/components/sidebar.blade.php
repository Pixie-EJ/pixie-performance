<div class="sidebar bg-black"> 
    <ul class="sidebar-list" style="padding: 0">
        <a onclick="enableSidebar(1)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-1">Home</li></a>
        <a onclick="enableSidebar(2)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-2">Membros</li></a>
        <a onclick="enableSidebar(3)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-3">Equipes</li></a>
        <a onclick="enableSidebar(4)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-4">Eventos</li></a>
        <a onclick="enableSidebar(5)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-5">Categorias</li></a>
        <a onclick="enableSidebar(6)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-6">Regras</li></a>
        <a onclick="enableSidebar(7)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-7">Emblemas</li></a>
        <a onclick="enableSidebar(8)" href="#"><li class="color-light m-0 py-3 px-4 sidebar-item-8">Temporadas</li></a>
    </ul>    
</div> 

<script>
    let sidebar_active = 0;

    function sidebarToggle() {
        if(sidebar_active % 2 == 0) {
            $('.sidebar').addClass('sidebar-active')
            $('.sidebar').removeClass('sidebar')
        } else {
            $('.sidebar-active').addClass('sidebar')
            $('.sidebar-active').removeClass('sidebar-active')
        }
        sidebar_active++;
    }

    function enableSidebar(sidebar_item) {
        switch(sidebar_item) {
            case 1:
                $('.sidebar-item-1').addClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 2:
                $('.sidebar-item-2').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 3:
                $('.sidebar-item-3').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 4:
                $('.sidebar-item-4').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 5:
                $('.sidebar-item-5').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 6:
                $('.sidebar-item-6').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 7:
                $('.sidebar-item-7').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-8').removeClass('li-active')
            break;
            case 8:
                $('.sidebar-item-8').addClass('li-active')
                $('.sidebar-item-1').removeClass('li-active')
                $('.sidebar-item-2').removeClass('li-active')
                $('.sidebar-item-3').removeClass('li-active')
                $('.sidebar-item-5').removeClass('li-active')
                $('.sidebar-item-6').removeClass('li-active')
                $('.sidebar-item-7').removeClass('li-active')
                $('.sidebar-item-4').removeClass('li-active')
            break;
        }
    }
</script>