import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";

export default function Footer() {
    const navigate = useNavigate();
    return (
        <footer className="footer">
            <div
                onClick={() => navigate(`/`)}
                className="navbar__logo"
                style={{ cursor: "pointer" }}
            >
                <img src="./images/logo-smoke.svg" alt="logo" width="50px" />
            </div>
            <div className="footer-nav">
                <Link to="/">Home</Link>
                <Link to="/rooms">Rooms</Link>
                <Link to="/events">Events</Link>
                <Link to="/about">About</Link>
                <Link to="/gallery">Gallery</Link>
                <Link to="/contacts">Contacts</Link>
            </div>
            <div className="footer-info">
                <p>Privacy Policy | Cookie Policy</p>
                <p>
                    {" "}
                    © 2022 Chateau Trebesice Zámek -Třebešice -28601 Čáslav
                    -Czech Republic info@ct.com +420 732 7977 <br></br>
                    <br></br>-
                </p>
            </div>
            
        </footer>
    );
}
