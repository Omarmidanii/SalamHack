import { HStack, Icon, Image, Text } from "@chakra-ui/react";
import logo from "../../assets/logo.png";

const NavBar = () => {
  return (
    <HStack justifyContent={"space-between"}>
      <Image src={logo} boxSize={20} ml={5} mt={2} />
      <HStack justifyContent={"center"} spacing={20}>
        <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
          {" "}
          Contact us
        </Text>
        <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
          {" "}
          Home{" "}
        </Text>
        <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
          {" "}
          Try for free{" "}
        </Text>
      </HStack>
      <Icon />
    </HStack>
  );
};

export default NavBar;
