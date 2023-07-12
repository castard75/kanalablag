import React from "react";
import { useEffect, useState } from "react";
import "../../styles/form.css";
import axios from "axios";
import {
  MDBNavbar,
  MDBNavbarBrand,
  MDBContainer,
  MDBInputGroup,
  MDBTextArea,
  MDBBtn,
} from "mdb-react-ui-kit";
import "mdb-react-ui-kit/dist/css/mdb.min.css";

const Home = () => {
  return (
    <>
      <MDBNavbar dark bgColor="dark" className="mb-5">
        <MDBContainer fluid>
          <MDBNavbarBrand href="/home">Accueil</MDBNavbarBrand>
        </MDBContainer>
      </MDBNavbar>
    </>
  );
};

export default Home;
