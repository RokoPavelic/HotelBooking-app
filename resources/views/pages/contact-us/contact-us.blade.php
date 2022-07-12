@extends('../../layouts/index')

@section('title', 'Contact Us')
@section('content')
    <main>
        <div class="container">
                       <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                    <p class="alert__header">Your message was sent</p>
                    <p class="alert__message">Our staff will contact you shortly</p>
                    {{-- {{Session::get('success')}} --}}
                </div>
            @endif
           
           <div class="contact">
                <div class="contact-hero">
          
                    <h1 class="contact__title">Contact Us</h1>
                </div>
                <div class="contact__contacts">
                    <div class='contact__contacts-phone'>
                      
                            <img src='../images/phone-full.svg' alt='phone icon' width="20px"> 
                            <p>+420 732 79090</p>
                        
                    </div>
                    <div class='contact__contacts-email'>
                        <img src='../images/mail-full.svg' alt='mail icon' width="20px"> 
                        <p>contact@ctt.com</p>
                    </div>
                    <div class='contact__contacts-location'>
                        <img src='../images/location-full.svg' alt='location icon' width="20px"> 
                        <div class='contact__contacts-location-address'>
                            <p>Zamek, Třebešice 28601 Čáslav</p>
                            <p>Czech Republic</p>
                        </div>
                    </div>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Chateau%20Trebesice%20Z%C3%A1mek%20T%C5%99ebe%C5%A1ice%201%2028601%20%C4%8C%C3%A1slav%20Czech%20Republic%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>
                    </div>
                </div>
    
               <div class="form">
                   
                    <form action="" method="post" action="{{ route('contact.store') }}">
                        <h3>Contact Us</h3>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder='Name'>
                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Email">
                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Phone">
                            @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                id="subject" placeholder="Subject">
                            @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                rows="6" placeholder="Message"></textarea>
                            @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                        </div>
                        <button type="submit" name="send" value="Submit" class="form-button">Submit</button>
                    </form>
               </div>
           </div>
        </div>
</main>
@endsection
