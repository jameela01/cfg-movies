<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class ="container">
        <div class="divpost">
           <div class="text">Thank you for rating!</div> 
           <div class="exit">edit</div>
        </div>
        <div class= "star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class= "fas fa-star" ></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class= "fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class= "fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class= "fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class= "fas fa-star"></label>
            <form action="#">
                <header> </header>
                <div class="divtextarea">
                    <textarea cols="30" placeholder="Describe your experience..."></textarea>
                </div>
                <div class="btn">
                    <button type="submit">post</button>
                </div>


            </form>
        </div>

    </div>
    <script>
        const btn =document.querySelector("button");
        const post =document.querySelector(".post");
        const widget =document.querySelector(".star-widget");
        const editBtn =document.querySelector(".edit");
        btn.onclick =()=>{
            widget.style.display ="none";
            post.style.display ="block";
            return false;

            editBtn.onclick =()=>{
            widget.style.display ="block";
            post.style.display ="none";

            
        }
        return false;
        }

        
        
    </script>
</body>
</html>