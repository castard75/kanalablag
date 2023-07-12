import React from "react";

import { useEffect, useState } from "react";
import "../../styles/form.css";
import axios from "axios";

import Information from "./Information.jsx";
import {
  MDBNavbar,
  MDBNavbarBrand,
  MDBContainer,
  MDBInputGroup,
  MDBTextArea,
  MDBBtn,
  MDBTable,
  MDBTableHead,
  MDBTableBody,
} from "mdb-react-ui-kit";
import "mdb-react-ui-kit/dist/css/mdb.min.css";

const Intervention = () => {
  // useEffect(() => {
  //   axios
  //     .get("https://localhost:8000/api/users")
  //     .then((res) => {
  //       console.log(res);
  //     })
  //     .catch((err) => {
  //       console.log(err);
  //     });
  // }, []);

  return (
    <>
      <MDBNavbar dark bgColor="dark" className="mb-5">
        <MDBContainer fluid>
          <MDBNavbarBrand href="/home">Nixia</MDBNavbarBrand>
        </MDBContainer>
      </MDBNavbar>
      <Information />{" "}
      <MDBTable>
        <MDBTableHead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Intervention</th>
          </tr>
        </MDBTableHead>
        <MDBTableBody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colSpan={2}>Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </MDBTableBody>
      </MDBTable>
    </>
  );
};

export default Intervention;
