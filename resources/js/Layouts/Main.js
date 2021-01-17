import React, { StrictMode } from "react";
import { Nav } from "../components/Nav";
import Routes from "../Routes";
import { BrowserRouter as Router } from "react-router-dom";

const Main = (props) => (
    <StrictMode>
        <Router>
            <Nav {...props}/>
            <Routes />
        </Router>
    </StrictMode>
);

export default Main;
