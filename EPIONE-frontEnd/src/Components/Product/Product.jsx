import Card from 'react-bootstrap/Card';
import ListGroup from 'react-bootstrap/ListGroup';
import Pro1 from './../../assets/P1.jpg';
import './Product.css';
function Produt() {
  return (
    <div>
    <h1>PRODUCTS</h1>
    <Card style={{ width: '18rem',margin:'70px'}}>
      <Card.Img variant="top" src={Pro1} />
      {/* <img src={logo} title="logo"/> */}
      <Card.Body>
        <Card.Title>Card Title</Card.Title>
        <Card.Text>
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </Card.Text>
      </Card.Body>
      <ListGroup className="list-group-flush">
        <ListGroup.Item>Cras justo odio</ListGroup.Item>
        <ListGroup.Item>Dapibus ac facilisis in</ListGroup.Item>
        <ListGroup.Item>Vestibulum at eros</ListGroup.Item>
      </ListGroup>
      </Card>
    </div>
  );
}

export default Produt;