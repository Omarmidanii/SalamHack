import {
  Box,
  Card,
  CardBody,
  Heading,
  Icon,
  Stack,
  Text,
  useDisclosure,
} from "@chakra-ui/react";
import { IoLocationSharp } from "react-icons/io5";
import CustomDrawer from "../Drawer";
import PlacesDrawer from "../PLaces/PlacesDrawer";


interface Props {
  id: number;
  image: string;
  name: string;
  location: string;
  type:string;
}
const PlaceCard = ({ image, name, location, id, type }: Props) => {
  const { isOpen, onOpen, onClose } = useDisclosure();
  return (
    <Box>
      <Card
        onClick={onOpen}
        cursor={"pointer"}
        overflow="hidden"
        borderRadius={20}
        boxShadow={`0`}
        w={300}
        //bgGradient={`linear(210deg,gray.100 , white  )`}
        //bgColor={'#FFFFE0'}
      >
        <Stack>
          <Box
            m={1}
            boxShadow={`0 10px 20px -8px gray`}
            borderRadius={25}
            bgPosition={"center"}
            bgImage={image}
            boxSize={300}
            h={200}
            bgSize={"cover"}
          />

          <CardBody ml={0.5} marginTop={-4}>
            <Heading size="sm" marginBottom="5px" padding="1px">
              {name}
              <Text color={"gray.500"} fontSize={13} mt={2}>
                <Icon as={IoLocationSharp} />
                {location}
              </Text>
            </Heading>
            {/*<Rating rate={75} />*/}
          </CardBody>
        </Stack>
      </Card>
      <CustomDrawer
        isOpen={isOpen}
        onClose={() => {
          onClose();
        }}
        body={<PlacesDrawer  endpoint={type} id={id} />}
        header={<></>}
      />
    </Box>
  );
};

export default PlaceCard;
