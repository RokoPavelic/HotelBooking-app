import React from "react";
import ReactDOM  from "react-dom";
import App from "./final-project/App";
import { BrowserRouter } from "react-router-dom";
 
const root = ReactDOM.createRoot(document.querySelector('#root'));
root.render(
    <BrowserRouter>
        <App />
    </BrowserRouter>
);