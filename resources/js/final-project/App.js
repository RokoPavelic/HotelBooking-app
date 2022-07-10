import React from "react";
import { Routes, Route } from "react-router-dom";
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
                <Route exact path="/" element={ <Home /> } />
                <Route exact path="/rooms" element={ <Rooms /> } />
                <Route exact path="/events" element={ <Events /> } />
                <Route exact path="/experience" element={ <Experience /> } />
                <Route exact path="/gallery" element={ <Gallery /> } />
                <Route exact path="/contacts" element={ <Contacts /> } />
           </Routes>
           <Footer />
            

         
         
        </>
    )
}


