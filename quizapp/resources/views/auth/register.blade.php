<!--Fremdcode, einzelne Darstellung wurden eigenständig angepasst-->
<html>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        h1{
            font-family: Pacifico;
            padding-left: 40%;
        }
    </style>
    <script>
        function testekennwortqualitaet(inhalt){
            if (inhalt==""){
                document.getElementById("security").innerHTML="keine Eingabe";
                return;
            }
            if (window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }
            else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("security").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","kennworttesten.php?q="+inhalt,true);
            xmlhttp.send();
        }
    </script>
    <body>

        <x-guest-layout>
            <x-jet-authentication-card>

                <h1>Register</h1>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" type="password" size="10" onkeyup="testekennwortqualitaet(this.value)" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <span id="security"></span>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-guest-layout>
    </body>
</html>
