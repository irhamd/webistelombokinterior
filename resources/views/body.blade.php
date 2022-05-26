<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('component/header')

<body>
    @yield('main_body')
   
    <a href="http://rsudkm.online:1515/pengaduan/createnohp" target="_blank" class="float1"> 
        <img src="/website/img/comment_.png" alt="" srcset="">    <br/>
        Saran
    </a>
    @include('component/footer')
</body>

</html>

<script>
    $('.slide').hiSlide();
</script>
