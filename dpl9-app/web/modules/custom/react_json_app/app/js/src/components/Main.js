import React from 'react';
import PropTypes from "prop-types";

class Main extends React.Component {
  state = {
    items: [],
  }
  componentDidMount() {
    fetch('https://dpl9-app.lndo.site/api/v1/movies')
      .then(response => response.json())
      .then(data => this.setState({ items: data }));
  }
  
  render() {
    const { items } = this.state;
    return (
        <div>
          {items.map((item) => (
                <div key={item.user_id}>
                    <h2>{item.title}</h2>
                    <p>{item.user_id}</p>
                </div>
          ))}
        </div>
    );
  }
}

export default Main;
