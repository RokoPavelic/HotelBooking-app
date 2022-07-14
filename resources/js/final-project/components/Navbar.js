import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";

export default function Navbar() {
    const navigate = useNavigate();
    return (
        <nav className="navbar">
            <div className="navbar__links-left">
                <ul>
                    <Link to="/">Home</Link>
                    <Link to="/rooms">Rooms</Link>
                    <Link to="/events">Events</Link>
                </ul>
            </div>
            <div
                onClick={() => navigate(`/`)}
                className="navbar__logo"
                style={{ cursor: "pointer" }}
            >
                <img src="./images/logo.png" alt="logo" width="50px" />
            </div>
            <div className="navbar__links-right">
                <ul>
                    <Link to="/about">About</Link>
                    <Link to="/gallery">Gallery</Link>
                    <Link to="/contacts">Contacts</Link>
                </ul>
            </div>
        </nav>
    );
}
