
<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <style>
      /* Add any custom styles you want here */
      /* This is just an example */
      body {
        font-family: sans-serif;
        background-color: rgb(8, 8, 8);
      }
      nav {
        background-color: #0c0c0c;
        color: white;
        display: flex;
        justify-content: right;
        padding: 20px;
      }
      nav a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
      }
     
      section {
        padding: 50px;
        text-align: center;
      }
      .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: url(images/pexels-ivan-samkov-4162451.jpg);
            background-size:cover;
        }
        
        .contact .content {
            max-width: 800px;
            text-align: center;
        }
        
       
        
        .contact .content p {
            font-weight: 300;
            color: #070707;
        }
        
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .container .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        
        .container .contactInfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }
        
        .container .contactInfo .box .icon {
            min-width: 60px;
            height: 60px;
            background: blueviolet;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 30px;
        }
        
        .container .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }
        
        .container .contactInfo .box .text h3 {
            font-weight: 500;
            color: black;
        }
        .container .contactInfo .box .text p{
            color: black;
        }
        .contactForm {
            width: 40%;
            padding: 40px;
            background: #fff;
        }
        
        .contactForm h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
        }
        
        .contactForm .inputBox {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }
        
        .contactForm .inputBox input,
        .contactForm .inputBox textarea {
            width: 100%;
            padding: 5px 0;
            margin: 10px;
            font-size: 16px;
            border: none;
            border-bottom: 2px solid rgb(71, 67, 67);
            outline: none;
            resize: none;
        }
        
        .contactForm .inputBox span {
            position: relative;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }
        .contactForm .inputBox input:focus~span,
        .contactForm .inputBox input:valid~span,
        .contactForm .inputBox textarea:focus~span,
        .contactForm .inputBox textarea:valid~span {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-20px);
        }
        
        .contactForm .inputBox input[type="submit"] {
            width: 100px;
            background:gray;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }
        section {
  background-color:gray;
  padding: 50px;
  position:relative;
}

.text-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}
video{
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: 0;
    

}
.contain {
 display: grid;
 align-items: center; 
 grid-template-columns: 3fr 3fr 3fr;
 column-gap: 30px;
 column-count: 2;
 
}

img {
  
  width: 400px;
height: 250px;
margin-top: 15px;
margin-bottom: 15px;
  
}

.text {
  font-size:20px;
  padding: 20px;
  align-items: center;
}
.left{
background: #ff651c;
color: white;
padding-top: 25px;
padding-bottom: 25px;
}
.right{
background: #16538b;
color: white;
padding-top: 25px;
padding-bottom: 25px;
}
h2{
border: 2px solid black;
width: 60%;
margin: auto;
border-radius: 4px;
}
.social-media-links {
  list-style: none;
  display: flex;
  justify-content: center;
}

.social-media-links li {
  margin: 0 10px;
}

.social-media-links img {
  width: 40px;
  height: 30px;

}

        
    </style>
  </head>
  <body>
    <nav>
      <a href="#services">Services</a>
      <a href="#contact">Contact Us</a>
    </nav>
    
        <section>
            <video src="images/Metal laser cutting machine LS7 - NACHIMO.mp4" autoplay></video>
            <div class="text-container">
              
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi aperiam qui similique, 
                illo vitae incidunt laudantium quas magnam rerum expedita, dolores aut! Cupiditate voluptas, 
                tempore aliquam velit blanditiis sunt illum eum harum ratione quae inventore iure eos beatae molestiae saepe quas animi similique. 
                In rem dolor temporibus expedita libero dicta voluptatem, 
                nostrum repellendus deserunt consectetur neque tenetur eum illo cupiditate similique modi id facilis iusto maxime voluptates soluta tempora voluptatum.</p>
            </div>
          </section>
           
    
    <section id="services">
      <h2>Our Services</h2>
      <div class="contain">
        <div class="col-sm-6 text-center left">
          <img src="images/1.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
        <div class="col-sm-6 text-center right">
          <img src="images/2.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
        <div class="col-sm-6 text-center left">
          <img src="images/3.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
        <div class="col-sm-6 text-center right">
          <img src="images/4.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
        <div class="col-sm-6 text-center left">
          <img src="images/5.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
        <div class="col-sm-6 text-center right">
          <img src="images/6.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
      
        <div class="col-sm-6 text-center left">
          <img src="images/7.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>
      
      
        <div class="col-sm-6 text-center right">
          <img src="images/8.jpeg">
        </div>
        <div class="text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
            itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
            id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
            distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
            Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
            delectus dignissimos magnam sed fugiat quas.</p>
        </div>

        <div class="col-sm-6 text-center left">
            <img src="images/9.jpeg">
          </div>
          <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus a ex deleniti ab placeat, 
              itaque commodi esse quaerat hic tempora totam cupiditate? Vitae quam eaque voluptatem commodi tenetur quis sint, 
              id reiciendis delectus illo iste consectetur provident error libero fugit eligendi. Exercitationem consectetur porro deserunt commodi, 
              distinctio magni ducimus iusto quas aut alias culpa numquam ipsam hic ab labore voluptates reprehenderit earum quaerat rem possimus. 
              Amet eos repellendus cum doloremque deleniti error, repellat voluptatibus reprehenderit aliquid quisquam suscipit illum tenetur sapiente nam voluptatum, 
              delectus dignissimos magnam sed fugiat quas.</p>
          </div>
    </div>

    </section>
    <section id="contact">
        <section class="contact">
            
                <h2>Contact Us</h2>
                

            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Enterprise Road, <br>Industrial Area<br>55060</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+2547xxxxxxxx <br>+2547xxxxxxxx</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>xxxxxx@gmail.com</p>
                        </div>
                    </div>
                </div>
            
            <div class="contactForm">
                <form action="https://formsubmit.co/aokostevo237@gmail.com" method="POST">
                    <h3>Send Message</h3>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            
            </div>
            </div>
        </section>
        <section>
        <ul class="social-media-links">
          <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
          <li><a href="https://www.twitter.com"><img src="twitter-icon.png" alt="Twitter"></a></li>
          <li><a href="https://www.instagram.com"><img src="instagram-icon.png" alt="Instagram"></a></li>
        </ul>

        </section>
    </section>
  </body>
</html>

