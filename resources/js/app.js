/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

import Main from "./Layouts/Main";
import ReactDOM from "react-dom";
import React from "react";
if (document.getElementById("main")) {
    ReactDOM.render(<Main/>, document.getElementById("main"));
}

/* ReactDOM.render(<App auth={document.getElementById("app").getAttribute('auth')}/>, document.getElementById("app")); */
