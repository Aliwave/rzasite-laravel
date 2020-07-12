@section('footer')
<footer>
    <div class="container">
        <div class="footer-row">
            <div class="footer-title">
            <a href="{{route('main')}}"><img src="{{asset('storage/mainpage/img/mainlogo.png')}}"
             alt="Logo" class="mainlogo"></a>
            <div class="oly-full-title">
                <div class="oly-pre-title">Областная олимпиада для старшеклассников</div>
                <h4>Реальность. Задача. Алгоритм</h4>
            </div>
            </div>
            <div class="download-block">
                <div class="downloads-title">Файлы для загрузки:</div>
                <ul>
                    <li><a href="{{asset('storage/mainpage/pdfInfLetter.pdf')}}">Информационное письмо</a></li>
                    <li><a href="{{asset('storage/mainpage/pdfStatement.pdf')}}">Положение об олимпиаде</a></li>
                </ul>
            </div>
        </div>
        
        <div class="dekanat-phone-block">
            <div class="dekanat-name">
            Деканат факультета компьютерных и физико-математических наук:
            </div>
            <div class="footer-phone"><a href="tel:88332208961">(8332) 208-961</a></div>
        </div>
        <div class="copyright">
            <a href="{{route('resources')}}">Используемые ресурсы</a>
            © 2020 Copyright 
            
        </div>
    </div>
</footer>