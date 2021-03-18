import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Example from './Example'
import Header from './Header'
import Login from './Login'
import Register from './Register'
import Tasks from './Tasks'

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <Header />
                <div>
                    <Route path='/example'>
                        <Example/>
                    </Route>
                    <Route path='/login'>
                        <Login/ >
                    </Route>
                    <Route path='/register'>
                        <Register/ >
                    </Route>
                    {/* <Route path='/tasks'>
                        <Tasks/ >
                    </Route> */}
                </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))