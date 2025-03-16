import { HStack, Icon, Image, Text } from "@chakra-ui/react";
import logo from "../../assets/logo.png";
import { Link } from "react-router-dom";

const NavBar = () => {
  return (
    <HStack justifyContent={"space-between"}>
      <Image src={logo} boxSize={20} ml={5} mt={2} />
      <HStack justifyContent={"center"} spacing={20}>
        <Link to={"/"}>
          <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
            {" "}
            Contact us
          </Text>
        </Link>
        <Link to={"/"}>
          <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
            {" "}
            Home{" "}
          </Text>
        </Link>
        <Link to={"chat"}>
          <Text textColor={"#7BC5C1"} cursor={"pointer"} fontWeight={"bold"}>
            {" "}
            Try for free{" "}
          </Text>
        </Link>
      </HStack>
      <Icon />
    </HStack>
  );
};

export default NavBar;
