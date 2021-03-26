<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="path/to/chartjs/dist/Chart.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    
    <script>

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <title>Teste prático laravel</title>
</head>
<body class="dark:bg-gray-900">
    
    <div x-data="{IsOpen: false, lang: false, Sidebar: false, modal: false, dark: localStorage.theme === 'dark'}">
        {{ $slot }}
    </div>

               

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>


   <script src="/js/app.js"></script>


    <script>
        // div sun/moon
        var htmlClasses = "";
        function change() {
            htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme == 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        }

        function noticesHandler() {
            return {
                notices: [],
                visible: [],
                add(notice) {
                    notice.id = Date.now()
                    this.notices.push(notice)
                    this.fire(notice.id)
                },
                fire(id) {
                    this.visible.push(this.notices.find(notice => notice.id == id))
                    const timeShown = 4000 * this.visible.length
                    setTimeout(() => {
                        this.remove(id)
                    }, timeShown)
                },
                remove(id) {
                    const notice = this.visible.find(notice => notice.id == id)
                    const index = this.visible.indexOf(notice)
                    this.visible.splice(index, 1)
                },
                
            };
        }
        function redirectThis() {
            var loginRoute = "{{route('login')}}";
            setTimeout(function(){ 
                location.replace(loginRoute);
            }, 3000);
        }
    </script>
</body>
</html> 