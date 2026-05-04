import React from "react";
import ReactDOM from "react-dom/client";
import Example from "./components/Example";
import "../css/app.css";

ReactDOM.createRoot(document.getElementById("app")!).render(
    <React.StrictMode>
        <Example />
    </React.StrictMode>
);
