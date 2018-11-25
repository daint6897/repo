import React, { Component } from 'react';
import ReactDOM from 'react-dom';
const so=[1,2,3,4,5,6];
	const so2=so.map((x) => x*2);
export default class HamMap extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-8 col-md-offset-2">
                        <div className="panel panel-default">
                            <div className="panel-heading">{this.props.content}</div>
                            <div className="panel-body">
                                {so2}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('ham-map')) {
    ReactDOM.render(<HamMap />, document.getElementById('ham-map'));
}