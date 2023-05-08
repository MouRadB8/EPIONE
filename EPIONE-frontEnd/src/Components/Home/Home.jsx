import React, { Fragment } from "react";
import Header from "./Header";
import './Home.css';
const Home = ()=>{
    return(
        <Fragment>
            <Header/> 
            <section className="numbers">
                <div className="container">
                    <div className="row">
                        <div className="col-md-3">
                            <h2>1234+</h2>
                            <h6>SAVINGS</h6>
                        </div>
                        <div className="col-md-3">
                            <h2>8394+</h2>
                            <h6>PHOTOS</h6>
                        </div>
                        <div className="col-md-3">
                            <h2>1204+</h2>
                            <h6>PRODUCTS</h6>
                        </div>
                        <div className="col-md-3">
                            <h2>1634+</h2>
                            <h6>GLOBES</h6>
                        </div>

                    </div>

                </div>

            </section>
        </Fragment>
        

    )
}

export default Home ;