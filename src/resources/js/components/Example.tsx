import React from "react";
import ReactDOM from "react-dom";
import Card from "@mui/material/Card";
import Typography from "@mui/material/Typography";

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <Card>
                        <Typography>Example Component</Typography>
                        <Typography>I'm an example component!</Typography>
                    </Card>
                </div>
            </div>
        </div>
    );
}

// 20行目以下を修正
export default Example;
