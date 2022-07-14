export default function Events() {
    return (
        <div className="events">
            <div className="events-hero">
                <h1 className="events__title">A Memorable Experience.</h1>
            </div>
            <div className="content">
                <h3> Let us host your events</h3>
                <p>
                    We count with experienced staff to make your event a one in a
                    lifetime experience.
                     Let our enchanting atmosphere be the setting
                    for your special day,<br/>
                     let our award winning chef add an
                    all-involving sensory experience for your guests.
                </p>
            </div>
            <div className="gallery_cont">
                <img
                    className="gallery_img"
                    src="./images/events_gallery_garden.jpeg"
                    width="300px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_gallery_gathering.jpeg"
                    width="300px"
                    height="300px"
                />
                <img
                    className="gallery_img"
                    src="./images/events_hero.jpeg"
                    width="300px"
                    height="300px"
                />
            </div>
            <button className="events-btn">Book Consultation</button>
  
            <div className="services">
            <h3 className="services-title"> Our Services Include:</h3>
           
                <div className="services-container">
                   
                    <ul>
                        <li>Catering</li>
                        <li>Professional Chef</li>
                        <li>Accommodation for guests</li>
                    </ul>
                </div>
                <div className="services-container">
                    <ul>
                        <li>Seating- staging</li>
                        <li>Custom Decoration</li>
                        <li>Professional Photographer</li>
                    </ul>
                </div>
                <div className="services-container">
                    <ul>
                        <li>Florist and Baker</li>
                        <li>Professional Organizer</li>
                        <li>Hosting services</li>
                    </ul>
                </div>
            </div>
        </div>
    );
 }
  
 
 
 