import axios from 'axios'
import { result } from 'lodash';
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class Tasks extends Component {

    
  state = { tasks : []};

  componentDidMount() {
    result = axios.get('/api/tasks')
    this.setState({tasks: result.data});
  }

  render () {
    
    return (
      <div className='container'>
        <div>
          <div>
            <div>
              <div>All Tasks</div>
              <div>
                  Task
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default Tasks