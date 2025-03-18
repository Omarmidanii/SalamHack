import { HStack, Icon, Image, Text } from "@chakra-ui/react";
import logo from "../../assets/logo.png";
import { Link } from "react-router-dom";
import { IoPersonCircleOutline } from "react-icons/io5";

const NavBar = () => {
  return (
    <HStack justifyContent={"space-between"} mx={10}>
      <Image src={logo} boxSize={20} mt={2} />
      <HStack justifyContent={"center"} spacing={20}>
        <Link to={"/places"}>
          <Text
            textColor={"#6AB4B0"}
            fontFamily={"sans-serif"}
            fontSize={17}
            cursor={"pointer"}
            fontWeight={"bold"}
          >
            {" "}
            Find places
          </Text>
        </Link>
        <Link to={"/"}>
          <Text
            textColor={"#6AB4B0"}
            fontFamily={"sans-serif"}
            fontSize={17}
            cursor={"pointer"}
            fontWeight={"bold"}
          >
            {" "}
            Home{" "}
          </Text>
        </Link>
        <Link to={"chat"}>
          <Text
            textColor={"#6AB4B0"}
            fontFamily={"sans-serif"}
            fontSize={17}
            cursor={"pointer"}
            fontWeight={"bold"}
          >
            {" "}
            Try for free{" "}
          </Text>
        </Link>
      </HStack>
      <Icon as={IoPersonCircleOutline} color={"#7BC5C1"} boxSize={10} />
    </HStack>
  );
};

export default NavBar;
