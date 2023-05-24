import logo from './logo.svg';
import './App.css';
import Home from './Components/Home/Home';
import Naves from './Components/Naves/Naves';
import Product from './Components/Product/Product';
import { Fragment } from 'react';

function App() {
  return (
    <Fragment>
      <Naves/>
      {/* <Home/> */}
      <Product/>
    </Fragment>
  );
}

export default App;
