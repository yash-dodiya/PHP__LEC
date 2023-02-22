<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700;800&family=Lora:wght@400;500;600&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap");
        * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        outline: none;
        border: none;
        font-family: "poppins", sans-serif;
        }

        :root {
        --firstcolor: #8f32f3;
        --firstcolorlight: #ab65f6;
        --gradient: linear-gradient(45deg, var(--firstcolor), var(--firstcolorlight));
        }
        ::selection {
        background: var(--firstcolor);
        color: #000;
        }
        body {
        display:NULL;
        position: relative;
        height: 100vh;
        width: 100%;
        background: #0b0a0a;
        overflow: hidden;
        animation: changebg 10s linear infinite alternate-reverse;
        }
        @keyframes changebg {
        0% {
            filter: hue-rotate(0deg);
        }
        100% {
            filter: hue-rotate(360deg) brightness(200%);
        }
        }
        .grad {
        background: linear-gradient(
            transparent 40%,
            var(--firstcolor) 60%,
            transparent
        );
        animation: 5s rotate infinite linear;
        height: 100%;
        width: 100%;
        position: absolute;
        }
        .cubes {
        height: 100vh;
        width: 100%;
        display: flex;
        gap: 0.1rem;
        flex-wrap: wrap;
        position: relative;
        justify-content: space-between;
        }

        .pause {
        animation-play-state: paused;
        }
        @keyframes rotate {
        0% {
            transform: translateY(-100%);
        }
        100% {
            transform: translateY(100%);
        }
        }
        .cube {
        border-radius: 5px;
        z-index: 1;

        width: 4rem;
        height: 4rem;
        background: #181717;
        transition: 1.5s ease-in-out;
        }
        .cube:hover {
        transition: 0s;
        background: var(--gradient);
        }
        .colorgreen {
        color: var(--firstcolor);
        }
        form {
        border-radius: 10px;
        width: 31%;
        box-shadow: 3px 6px 10px rgba(0, 0, 0, 0.701);
        background: #282626;
        z-index: 100;
        text-align: center;
        padding: 2rem 1.5rem;
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        .inputdiv {
        margin: 1rem 0;
        display: grid;
        gap: 1rem;
        }
        .eyeicon.none #eyeoff {
        scale: 0;
        }
        .emailcont {
        position: relative;
        }
        .eyeicon ion-icon {
        transition: 0.2s ease;
        position: absolute;
        right: 0.5rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        z-index: 100;
        cursor: pointer;
        opacity: 0.7;
        }
        input{
            border-radius: 10px;
        width: 100%;
        padding: 1rem;
        background: #393737;
        color: azure;
        font-size: 1rem;
        transition: 0.3s ease;
        }

        input::placeholder {
        transition: 0.3s ease;
        color: #726f6f;
        }
        input:is(:active, :focus) {
        background: #2f2b2b;
        }
        input:is(:active, :focus)::placeholder {
        transform: translateY(-0.5rem);
        color: azure;
        font-size: 1rem;
        }
        button {
        border-radius: 10px;
        width: 100%;
        padding: 1rem;
        margin-top: 1rem;
        transition: 0.3s ease;
        font-size: 1rem;
        font-weight: 600;
        background: #595454;
        color: #fff;
        }
        button:hover {
        background: var(--firstcolor);
        }

        label{
            padding-left: 10px
        }

        .redio{
        display: flex;
        margin-top: -11px;
        }
        .check{
            text-align: left;
            display: flex;
        }
        .a{
            display: flex;
            padding-left:24px;
        }
        .ic{
            font-size:22px;
            padding-left: 89%;
        }
        .option{
            display:flex;
            margin-top: 10px;
            margin-bottom:10px;
        }
        select{
            width: 30%;
            /* background-color: #484a48; */
            font-weight: 600;
            text-align: center;
            color: red ;
        }
        /* .row{
            display:flex; */
            /* flex-wrap:wrap; */
        /* } */
    </style>
</head>
<body>
    <div class="grad"></div>
    <div class="cubes"></div>
    <div class="cubes"></div>
      <div class="row">

        <form method = "post">
            <div class="ic">
                <a href="home"><i class="fa-sharp fa-solid fa-house-chimney"></i></a>
            </div>  
        <h2 class="colorgreen">user detail</h2>
        <div class="inputdiv">
            <div>
                <input type="text" name = "first_name" placeholder="first name" />
            </div>
            <div>
                <input type="text" name = "last_name" placeholder="last name" />
            </div>
            <div>
                <input type="text" name = "email" placeholder="Your Email" />
            </div>
            <div class="emailcont">
                <input type="password" name= "f_password" class="inputtext" placeholder="Your Password" />
            </div>
            <div class="emailcont">
                <input type="password" name= "l_password" class="inputtext" placeholder="re-type Password" />
                <div class="eyeicon">
                    <ion-icon id="eyeoff" name="eye-off-outline"></ion-icon>
                    <ion-icon id="eyeon" name="eye-outline"></ion-icon>
                </div>
            </div>
            <div class="slidecontainer">
            <p style="text-align:start;">your age : <span id="demo"></span></p> 
                <input type="range" name="age" min="18" max="100" value="18" class="slider" id="myRange">
            </div>
            <div>
                <input type="date" name="Dob"/>
            </div>
            <div class="option">
                <p style = "padding-right: 20px;">Choose a city : </p>
                <select id = "city" name="city">
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Surat">Surat</option>
                    <option value="Vadodara">Vadodara </option>
                    <option value="somnath(gir)">somnath(gir)</option>
                    <option value="junagadh">junagadh</option>
                    <option value="rajkot">rajkot</option>
                    <option value="porbandar">porbandar</option>
                    <option value="amreli">amreli</option>
                    <option value="bhavnagr">bhavnagr</option>
                    
                </select>
            </div>
            <div class="redio">
                <p style = "padding-right: 20px;">gender</p>
                <div class="a">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">MALE</label>
                </div>
                <div class="a">
                    <input type="radio" id="css" name="gender" value="female">
                    <label for="female">FEMALE</label>
                </div>
            </div>
            <div class="check">
                <p>language</p>
                <div class="a">
                    <input type="checkbox" id="html" name="language[]" value="html">
                    <label for="html">html</label>
                </div>
                <div class="a">
                    <input type="checkbox" id="css" name="language[]" value="css">
                    <label for="css">css</label>
                </div>
                <div class="a">
                    <input type="checkbox" id="php" name="language[]" value="php">
                    <label for="php">php</label>
                </div>
                <div class="a">
                    <input type="checkbox" id="java" name="language[]" value="java">
                    <label for="java">java</label>
                </div>
            </div>
        </div>
        <button name="submit">submit</button>
    </form>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>

            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function() {
            output.innerHTML = this.value;
            }

        const eyeoff = document.querySelector(".eyeicon"),
        input = document.querySelector(".inputtext");
        grad = document.querySelector(".grad");
        eyeoff.addEventListener("click", () => {
        eyeoff.classList.toggle("none");
        grad.classList.toggle("pause");
        input.type === "password" ? (input.type = "text") : (input.type = "password");
        });
        for (let i = 0; i < 800; i++) {
        let cube = `
        <div class="cube"></div>
                    `;
        document.querySelector(".cubes").insertAdjacentHTML("afterbegin", cube);
        }
    </script>
</body>
</html>