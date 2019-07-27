import React from 'react'
import { Link } from 'react-router-dom';


export default function Course(props) {

    const divStyle = {
        width: '250px'
    }
    return (

        <div className="card m-3" style={divStyle}>

            <div className="card-body">

                <h2 className="card-title">{props.curso ? props.curso : 'Nombre del curso '}</h2>
                <p className="card-text">{props.descripcion ? props.descripcion : 'Descripción del curso'}</p>
                <p className="card-text">{props.imagen ? props.imagen : 'imagen '}</p>
                <Link to={'/cursos/'+ props.id }  className="btn btn-outline-primary" >
                    Tomar Curso
                </Link>
                {/* <Link to={'/niveles/'+ props.id }  className="btn btn-outline-primary" >
                    Tomar Curso
                </Link> */}

            </div>


        </div>

    )
}
