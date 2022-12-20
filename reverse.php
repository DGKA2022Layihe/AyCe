<html>
    <head>
        <title>
            Reverse
        </title>
        <style>
            .content {
            position: fixed;
            bottom: 0;
            background: white;
            color: crimson;
            width: 100%;
            height: 99%;
            }
            .content_alt {
            position: fixed;
            bottom: 50px;
            color: crimson;
            width: 100%;
            padding: 0px;
            }
            .content_ust {
            position: fixed;
            width: 10%;
            height: 70px;
            padding: 0px;
            position: absolute;
            top: 15px;
            right: 0px;
            }
        </style>
    </head>
    <body style="background-color: white;">
        <video style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;" autoplay muted loop>
            <source src="4k background footage (ideal for Blockchain Website).webm" type="video/webm">
        </video>
        <div class="content">
            <div style="text-align: center; margin-top: 70px; font-size: 20pt;">
                <h1>Reverse</h1>
                <img style="width: 200px; height: 200px; margin-bottom: 40px;" src="reverse.jpg">

                <form>
                    Enter plaintext: <textarea type="text" id="reverse" name="text"></textarea><br/><br/>
                    Reverse <input type="button" style="font-size: 15pt;" value="encrypt or decrypt" id="ayce" onclick="Reverse()">
                </form>
                Ciphertext : <textarea id="plaintext"></textarea>
                
                <script>
                    function Reverse() {
                        var str = document.getElementById("reverse").value;
                        var splitString = str.split("");
                        var reverseArray = splitString.reverse();
                        var joinArray = reverseArray.join("");
                        a = joinArray;
                        console.log(a);
                        document.getElementById("plaintext").innerHTML =  a;
                    }
                </script>
            </div>
        </div>
        <div class="content_alt">
            <p style="font-size: 20pt; text-align: center; color: crimson;"><a style="color: crimson; text-decoration:none;" href="caesar.php" target="_top">Caesar</a> &nbsp &nbsp &nbsp 
            <a style="color: crimson; text-decoration:none;" href="base32.php" target="_top">Base32</a></p>
        </div>
    </body>
</html>