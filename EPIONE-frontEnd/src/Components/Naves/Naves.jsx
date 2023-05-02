import React from "react";
import { Navbar , Nav ,Container } from "react-bootstrap";
import './Naves.css';
import logo from './../../assets/logo.png';
const Naves = ()=>{
    return(
        <Navbar expand="lg">
        <Container>
          <Navbar.Brand href="#home">
            <img src={logo} title="logo"/>
          </Navbar.Brand>
          <Navbar.Toggle aria-controls="basic-navbar-nav" />
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav className="mx-auto">
              <Nav.Link href="#home">Home</Nav.Link>
              <Nav.Link href="#link">Product</Nav.Link>
              <Nav.Link href="#home">Panier</Nav.Link>
              <Nav.Link href="#home">Review</Nav.Link>
              <Nav.Link href="#link">About Us</Nav.Link>
            </Nav>
            <Nav>
                <Nav.Link id="lastnav">Sign Up</Nav.Link>
            </Nav>

          </Navbar.Collapse>
        </Container>
      </Navbar>
    )
}

export default Naves;