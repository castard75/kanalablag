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

const FormControll = () => {
  const [name, setName] = useState();
  const [firstname, setFirstName] = useState();

  const [intervention, setIntervention] = useState();
  console.log(intervention);

  const formHandle = (e) => {
    e.preventDefault();
    console.log(name);
    console.log(firstname);

    const data = {
      name: name,
      firstName: firstname,
      intervention: intervention,
    };

    axios
      .post("https://localhost:8000/api/users", data)
      .then((response) => {
        console.log(response);
      })
      .catch((err) => {
        console.log(err);
      });
  };

  return (
    <>
      <MDBNavbar dark bgColor="dark" className="mb-5">
        <MDBContainer fluid>
          <MDBNavbarBrand href="/home">Nixia</MDBNavbarBrand>
        </MDBContainer>
      </MDBNavbar>

      <div className="container-fluid container-width">
        {/* <MDBInputGroup textBefore="Nom" className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="username"
            onChange={(e) => {
              setName(e.target.value);
            }}
          />
        </MDBInputGroup>
        <MDBInputGroup textBefore="Prénom" className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="username"
            onChange={(e) => {
              setFirstName(e.target.value);
            }}
          />
        </MDBInputGroup>
        <MDBTextArea
          label="Message"
          id="textAreaExample"
          rows={4}
          onChange={(e) => {
            setIntervention(e.target.value);
          }}
        />
        <MDBBtn className="mt-2" onClick={formHandle}>
          Valider
        </MDBBtn> */}
      </div>
    </>
  );
};

export default FormControll;
