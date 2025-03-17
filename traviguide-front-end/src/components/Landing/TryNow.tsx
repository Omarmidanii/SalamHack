import {
  Box,
  Icon,
  Input,
  InputGroup,
  InputRightElement,
  Stack,
  Text,
} from "@chakra-ui/react";
import img from "../../assets/Landing/tryNow.jpg";
import { IoSend } from "react-icons/io5";
const TryNow = () => {
  return (
    <Stack
      pb={96}
      spacing={20}
      w={"inherit"}
      bgImg={img}
      bgRepeat={"no-repeat"}
      bgSize={"cover"}
      mx={-10}
      mt={96}
      h={750}
      bgPos={"top"}
      bgColor={"gray"}
      placeContent={"center"}
    >
      <Text
        placeSelf={"center"}
        fontSize={36}
        fontWeight={"bold"}
        color={"white"}
        w={600}
        textAlign={"center"}
      >
        {" "}
        Try <text style={{ color: "#333333", fontSize: 42 }}>TraviGuide </text>
        now and enjoy a planning free vacation
      </Text>
      <Box w={700} placeSelf={"center"}>
        <InputGroup>
          <InputRightElement>
            <Icon
              as={IoSend}
              cursor={"pointer"}
              boxSize={5}
              mt={1}
              color={"#777777"}
            />
          </InputRightElement>
          <Input 
            _placeholder={{ color: "#888888" }}
            borderRadius={20}
            borderColor={"rgba(149, 156, 156, 0.55)"}
            bgColor={"rgba(209, 226, 226, 0.75)"}
            placeholder="plan myschedule for a 5-day trip to tokyo"
          />
        </InputGroup>
      </Box>
    </Stack>
  );
};

export default TryNow;
