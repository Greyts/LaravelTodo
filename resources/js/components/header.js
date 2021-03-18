import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';

export default class Header extends Component {

    render() {

        return(
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <Link to="/">Home</Link>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <Link to="/login">Login</Link>
                                    </li>
                                        <li class="nav-item">
                                            <Link to="/register">Register</Link>
                                        </li>
                                        {this.state.tasks.map(task => <li>{task.body}</li>)}
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="py-4">
                    
                </main>
            </div>
            );
        }
}

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}