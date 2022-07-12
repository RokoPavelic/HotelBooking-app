

export default function Contacts() {
    return (
        <main className="contact">
            <div className="contact-hero">
                {/* <img src="./images/ContactUs_hero.jpg" alt="receptionist picture" className="contact__image" /> */}
                <h1 className="contact__title">Contact Us</h1>
            </div>

            <div className="contact__contacts">
                <div class='contact__contacts-phone'>
                        
                        <img src='../images/phone-full.svg' alt='phone icon' width="20px" /> 
                        <p>+420 732 79090</p>
                    
                </div>
                <div class='contact__contacts-email'>
                    <img src='../images/mail-full.svg' alt='mail icon' width="20px" /> 
                    <p>contact@ctt.com</p>
                </div>
                <div class='contact__contacts-location'>
                    <img src='../images/location-full.svg' alt='location icon' width="20px" /> 
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
            <div className="form">
                
                <form>
                    <h3>Contact Us</h3>
                    <p>Name</p>
                    <input type="text" name="name" id="name" required/>
                    <p>Email</p>
                    <input type="email" name="email" id="email" required />
                    <p>Phone</p>
                    <input type="text" id="phone" name="phone" />
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />       
                    <textarea id="textarea" name="textarea" rows="5" cols="50">Message</textarea>
                    <button className="form-button">Submit</button>
                    
                </form>
            </div>
        </main>
    )
}