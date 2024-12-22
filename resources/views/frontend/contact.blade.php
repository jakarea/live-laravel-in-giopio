@extends('layouts.frontend')
@section('body')
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-all">
            <h3 class="contact-form-title font-jakarta">Have An Idea? Just Leave<br>
                a Message!
            </h3>
            {{ session('name') }}
            <ul>
                <li>key:{{session('key')}}</li>
                <li>key2:{{session('key2')}}</li>
                <li>key3:{{session('key3')}}</li>
               @if(session('token'))
                <li>token: {{session('token')}}</li>
                @endif
            </ul>
            <div class="contact-number font-jakarta">
                <div class="number-email">
                    <span>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 4.5C1.5 2.84315 2.84315 1.5 4.5 1.5H9.41886C10.0645 1.5 10.6377 1.91315 10.8419 2.52566L13.0886 9.26582C13.3247 9.97399 13.0041 10.748 12.3364 11.0818L8.95051 12.7747C10.6039 16.4418 13.5582 19.3961 17.2253 21.0495L18.9182 17.6636C19.252 16.9959 20.026 16.6753 20.7342 16.9114L27.4743 19.1581C28.0869 19.3623 28.5 19.9355 28.5 20.5811V25.5C28.5 27.1569 27.1569 28.5 25.5 28.5H24C11.5736 28.5 1.5 18.4264 1.5 6V4.5Z" stroke="#FFA726" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </span>
                    <p>(000) 854 854 854</p>
                </div>
                <div class="number-email">
                    <span>
                        <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 6L13.3359 13.8906C14.3436 14.5624 15.6564 14.5624 16.6641 13.8906L28.5 6M4.5 22.5H25.5C27.1569 22.5 28.5 21.1569 28.5 19.5V4.5C28.5 2.84315 27.1569 1.5 25.5 1.5H4.5C2.84315 1.5 1.5 2.84315 1.5 4.5V19.5C1.5 21.1569 2.84315 22.5 4.5 22.5Z" stroke="#FFA726" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </span>
                    <p>Contact@oakfood.nl</p>
                    <a href="https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors" target="_blank" class="contact-button font-jakarta">Validation Rules</a> 
                </div>
            </div>
        
            <form method="POST" >
                @csrf
                <div class="all-contact-form font-work">
                    <div class="contact-form-col">
                        <div class="contact-item">
                            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                            {{ $errors->first('name') }}
                        </div>
                        <div class="contact-item">
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"">
                            {{ $errors->first('email') }}
                        </div>
                    </div>
                    <div class="contact-item">
                        <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}"">
                        {{ $errors->first('subject') }}
                    </div>
                    <div class="contact-item">
                        <input type="text" placeholder="Message" name="message" value="{{ old('message') }}"">
                        {{ $errors->first('message') }}
                    </div>
                </div>
                <div class="contact-send-button">
                    <button  > Send </button>  
                </div>
            </form>
        </div>
    </div>
</section>
@endsection


@section('style')

<style>

@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');


* {
    padding: 0;
    margin: 0;
    outline: none;
    list-style-type: none;
    text-decoration: none;
    box-sizing: border-box;
}

ol,
ul,
h1,
h2,
h3,
h4,
h5,
h6,
a,
p,
i,
button,
strong,
u,
sub,
sup,
span,
textarea,
table tr td,
select,
input {
    padding: 0;
    margin: 0;
}

select:focus-within,
textarea:focus-within,
input:focus-within,
.form-control:focus-within,
button:focus-within {
    box-shadow: none !important;
}

a,
a:hover {
    color: #000;
    text-decoration: none;
}

ol,
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

hr {
    border: none;
    display: block;
    width: 100%;
    height: 1px;
}

h1,
h2 {
    font-size: 3.5rem;
    line-height: 130%;
}

h3,
h4 {
    font-size: 2.6rem;
    line-height: 120%;
}

h5,
h6 {
    font-size: 2rem;
    line-height: 120%;
}

p { 
    font-size: 1rem;
    line-height: 120%;
}

body{
    font-family: "Poppins", sans-serif; 
}

.container{
    max-width: 1290px;
    margin: 0 auto;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
 
 
.font-work{
    font-family: "Work Sans", sans-serif;
}

.font-jakarta{
    font-family: "Plus Jakarta Sans", sans-serif;
}
.font-poppins{
    font-family: "Poppins", sans-serif;
}

.fluid{
    max-width: 100%;
} 

/* header_start */
 
.nav-section{
    background: #101F32;
    padding: 20px 0;
    border-bottom: 5px solid #ffffff;
} 

.nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 120px; 
}
.menu{
    display: none;
}

.nav ul {
    display: flex;
    justify-content: space-between;
    align-items: center; 
    gap: 62px;
}
.nav ul li a{
    font-family: Plus Jakarta Sans;
    font-size: 18px;
    font-weight: 500;
    line-height: 22.68px; 
    color: #FFFDE7;
    transition: all 0.2s ease-in-out;
}
.nav ul li a:hover{
    color: #FF9800;
}
.nav ul li .nav-active {
    color: #FF9800;
}
 
.nav-icons{
    display: flex;
    align-items: center;
    gap: 16px;
}
.menu-close{
    display: none;
}
.nav input {
    display: none;
}

.header-all{
    overflow-x: hidden;
}

/* footer-section */
.footer-section{
    background-color: #101F32;
    padding-top: 150px;
    padding-bottom: 100px; 
}

.footer-all-content{
    display: grid;
    grid-template-columns: 40% 60%;
    position: relative;
}

.footer-leftsite p { 
    font-size: 14px;
    font-weight: 400;
    line-height: 25px;
    text-align: left;
    color: #FFFFFF;
    padding-top: 40px;
    padding-bottom: 53px;
    width: 397px;
}

.footer-brand-logo{
    display: flex;
    align-items: center;
    gap: 12px;
}
.footer-brand-logo a img{
    height: 30px;
}

.nix-logo {
    margin-top: 52px;
    display: flex;
    flex-direction: column; 
    gap: 16px;
}

.nix-logo a img{
    width: 100px;
    height: 28px;
}
.nix-logo span {
    font-family: Plus Jakarta Sans;
    font-size: 14px;
    font-weight: 400;
    line-height: 17.64px;
    text-align: left;
    color: #FFFFFF;
}



.footer-all-page-content{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-page h4 {
    font-family: Plus Jakarta Sans;
    font-size: 22px;
    font-weight: 600;
    line-height: 27.72px;
    text-align: left;
    color: #FFFFFF;    
}
.footer-page ul li a { 
    font-family: Work Sans;
    font-size: 16px;
    font-weight: 500;
    line-height: 25.6px;
    text-align: left; 
    color: #FFFFFF;    
}

.footer-page h4{ 
    padding-bottom: 40px;  
}
.footer-page ul li { 
    padding: 8px 0;  
}
.footer-page ul li a { 
    transition: all 0.2s ease-in-out;
}
.footer-page ul li a:hover { 
    color: #FF9800;
}

.social{
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 16px;
}
.email-phone{
    margin-bottom: 16px;
}
.email-phone span{ 
    font-family: Work Sans;
    font-size: 16px;
    font-weight: 500;
    line-height: 25.6px;
    text-align: left;
    color: #FFFFFF;
}
.email-phone{
    display: flex;
    align-items: center;
    gap: 20px;
}

.footer-subscribe {
    width: 535px;
    margin-left: auto;
}

.input-button{
    width: 100%; 
    background: #323B49;
    position: relative;
    display: flex;
    align-items: center;
    margin-bottom: 14px;
    padding-left: 20px;
}
.input-button input {
    width: 100%;
    border: none;
    background-color: transparent; 
    font-family: Poppins;
    font-size: 12px;
    font-weight: 400;
    line-height: 18px;
    text-align: left;
    color: #fff;
}
.input-button a {
    padding: 16px 22px; 
    background: #FFA726;
    margin: 7px;
    font-family: Poppins;
    font-size: 16px;
    font-weight: 500;
    line-height: 24px;
    text-align: left;
    color: #fff;
    transition: all 0.3s ease-in-out;
}
.input-button a:hover{ 
    background: #101f3260;  
}
.footer-subscribe span { 
    font-family: Work Sans;
    font-size: 14px;
    font-weight: 400;
    line-height: 22.4px;
    text-align: left; 
    color: #fff; 
}
/* footer-section */ 
/* hero-section */

.hero-all-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 190px 0; 
}

.hero-all-content p {
    font-size: 24px;
    font-weight: 500;
    color: white; 
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0px 22px;
    line-height: 28px;
    background: #ffffff3d;
}
.hero-all-content h4 {
    font-size: 48px;
    font-weight: 700;
    color: white; 
    padding-top: 12px;
}

.hero-section{
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

/* hero-section */
/* contact-form */

.contact-form-all{
    padding: 150px 0;
}

.contact-form-title{
    font-size: 48px;
    font-weight: bold;
    color: #101F32;
    padding-bottom: 60px;
}

.contact-number {
    display: flex;
    align-items: center;
    gap: 60px;
    padding-bottom: 60px;
}  

.number-email p {
    font-size: 24px;
    font-weight: bold;
    color: #FFA726;
}

.number-email {
    display: flex;
    align-items: center;
    gap: 10px;
}


.all-contact-form {
    width: 100%;
}

.contact-form-col {
    display: flex; 
    align-items: center;
    gap: 30px;
    width: 100%;
}

.contact-form-col,
.contact-item input {
    width: 100%;
    padding-bottom: 24px;
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: 500;
    color: #101f327e;
}

.contact-item {
    border-bottom: 1px solid #E9EAEC;
    width: 100%;
    margin-bottom: 62px;
}

.contact-item input::placeholder{
    font-size: 18px;
    font-weight: 500;
    color: #101f327e;
    font-family: "Work Sans", sans-serif;
} 
.contact-form-all{
    width: 850px;
    margin: 0 auto;
}


.contact-send-button button{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 500;
    color: white;
    padding: 0px 85px;
    height: 67px;
    background: #FFA726; 
    transition: all 0.3s;
    border: none;
    cursor: pointer;

}
.contact-send-button button:hover{
    background: #bd7100; 
   
}

.header-all{
    overflow: hidden;
}

</style>
@endsection


@section('script')
<script>
   // alert('Hello script section!')
</script>
@endsection