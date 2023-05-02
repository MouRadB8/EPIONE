import logo from './logo.svg';
import './App.css';
import Home from './Components/Home/Home';
import Naves from './Components/Naves/Naves';
import { Fragment } from 'react';

function App() {
  return (
    <Fragment>
      <Naves/>
      <Home/>
    </Fragment>
  );
}

export default App;
