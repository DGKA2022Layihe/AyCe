<!DOCTYPE html>
<html lang="en">
<head>
    <title>Caesar</title>
    <style>
body {
    overflow: hidden;
    /* margin: 0;
    background-color: black; */
}


.container {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    flex-direction: column;
    background-color: white;
}

.container h1 {
    text-align: center;
    color: crimson;
}

#app-container {
    display: flex;
    flex-direction: column;
    width: 50%;
    align-items: center;
}

#app-container textarea {
    height: 50px;
    width: 200px;
    font-size: 18px;
}

#buttons-container {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

#buttons-container input {
    width: 100px;
    margin: 0 15px 0 15px;
}
.content_alt {
            position: fixed;
            bottom: 80px;
            color: black;
            width: 100%;
            padding: 0px;
            height: 7%;
            }
    </style>
</head>

<body>
    <div style="text-align: center; margin-top: 70px; font-size: 15pt;">
    <div class="container">
        
        <h1>Caesar</h1>
        <img style="width: 200px; height: 200px; margin-bottom: 40px;" src="caesar.jpg">
        <div id="app-container">
            <textarea name="" id="text"></textarea>
            <div id="buttons-container">
                <button id="encrypt" style="font-size: 20px;">Encrypt</button>
                <input id="key" type="text" placeholder="key">
                <button id="decrypt" style="font-size: 20px;">Decrypt</button>
            </div>
        </div>
    </div>
<script>

    const btnEncrypt = document.querySelector('#encrypt');
    const btnDecrypt = document.querySelector('#decrypt');
    const key = document.querySelector('#key');

    const listLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
                         'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
    
    let newText = '';

    btnEncrypt.addEventListener('click', () => {
        const textarea = document.querySelector('#text');
        const keyValue = Number(key.value);
        
        for (let letter of textarea.value) {
            letter = letter.toLowerCase();
            if (!listLetters.includes(letter)) {
                continue
            }
            
            const indexLetter = listLetters.findIndex((item) => item ===letter);
            let indexNewLetter = indexLetter + keyValue;

            if(indexNewLetter > 25) {
                indexNewLetter -= 26;
            }
            newText += listLetters[indexNewLetter]
            textarea.value = newText;
        }
        newText = '';
    });

    btnDecrypt.addEventListener('click', () => {
        const textarea = document.querySelector('#text');
        const keyValue = Number(key.value);
        
        for (const letter of textarea.value) {
            if (!listLetters.includes(letter)) {
                continue
            }
            
            const indexLetter = listLetters.findIndex((item) => item ===letter);
            let indexNewLetter = indexLetter - keyValue;

            if(indexNewLetter < 0) {
                indexNewLetter += 26;
            }
            newText += listLetters[indexNewLetter]
            textarea.value = newText;
        }
        newText = '';
    });

</script>
<div class="content_alt">
    <p style="font-size: 20pt; text-align: center; color: crimson;"><a style="color: crimson; text-decoration:none;" href="reverse.php" target="_top">Reverse</a>&nbsp &nbsp &nbsp<a style="color: crimson; text-decoration:none;" href="base32.php" target="_top">Base32</a></p>
</div>
</body>
</html>