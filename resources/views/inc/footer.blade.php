
<style>

footer{
  position: absolute;

  background: #111;
  height: auto;
  width: 100%;

  padding-top: 40px;
  color: #fff;
}
.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}
.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}
.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;
}

.footer-bottom{
  background: #000;
  text-align: center;

}
.footer-bottom p{
  font-size: 14px;
  padding:20px;
  text-transform: capitalize;
}
.footer-bottom p a{
color:#44bae8;
font-size: 16px;
text-decoration: none;
}
.footer-bottom span{
  text-transform: uppercase;
  opacity: .4;
  font-weight: 200;
}


  </style>


<footer>
    <div class="footer-content">
        <h3>ABOUT US</h3>
        <p>Report Crime is a final year project submitted to Daffodil International University under the supervision of SUPERVISOR NAME<br>
        <h3>THE DEVS</h3>
        <div style="display: inline-flex;">
        <div style="display: inline-block; background-color:rgba(245, 245, 245, 0.5); padding:20px; margin:20px">
        <img src="{{asset('images/dev1.jpg')}}" style="width:250px; border-radius:50%; padding:30px"><br>
        Md. Amanullah Akash<br>
        ID: 181-35-328<br>
        Department of Software Engineering<br>
        Daffodil International University<br>
        </div>
        
        <div style="display: inline-block; background-color:rgba(245, 245, 245, 0.5); padding:20px; margin:20px">
        <img src="{{asset('images/SIr.jpg')}}" style="width:250px; border-radius:50%; padding:30px; height:310px"><br>
        Md. Rajib Mia<br>
        Project Supervisor<br>
        Lecturer<br>
        Department of Software Engineering<br>
        Daffodil International University<br>
        </div>
        </div>
        </p>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; <a href="#">Daffodil International University</a>  </p>
    </div>

</footer>