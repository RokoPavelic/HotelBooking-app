import React from "react";
import { Routes, Route, Link } from "react-router-dom";
import Navbar from "./components/Navbar";
import Rooms from "./components/pages/Rooms";
import Home from "./components/pages/Home";
import Events from "./components/pages/Events";
import Experience from "./components/pages/Experience";
import Gallery from "./components/pages/Gallery";
import Contacts from "./components/pages/Contacts";
import Footer from "./components/Footer";

export default function App() {
    return (
        <>
            <Navbar />
            
            <Routes>
                <Route exact path="/" element={<Home />} />
                <Route path="/rooms" element={<Rooms />} />
                <Route path="/events" element={<Events />} />
                <Route path="/experience" element={<Experience />} />
                <Route path="/gallery" element={<Gallery />} />
                <Route path="/contacts" element={<Contacts />} />
            </Routes>
            <Footer />
        </>
    );
}
