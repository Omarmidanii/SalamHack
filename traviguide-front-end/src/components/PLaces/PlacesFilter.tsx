import {
  Button,
  ButtonGroup,
  IconButton,
  Popover,
  PopoverBody,
  PopoverContent,
  PopoverFooter,
  PopoverTrigger,
  Select,
  Stack,
  useDisclosure,
} from "@chakra-ui/react";
import resizeWindow from "../../services/resizeWindow";
import { HiOutlineAdjustmentsHorizontal } from "react-icons/hi2";
import CostRangeSlider from "./RangeSlider";

const PlacesFilter = () => {
  const { width } = resizeWindow();
  const { isOpen, onToggle, onClose } = useDisclosure();
  return (
    <Popover
      returnFocusOnClose={false}
      isOpen={isOpen}
      onClose={onClose}
      placement={width >= 500 ? "left-start" : "bottom"}
      closeOnBlur={false}
    >
      <PopoverTrigger>
        <IconButton
          aria-label="filter"
          icon={<HiOutlineAdjustmentsHorizontal size={26} color="gray" />}
          cursor={"pointer"}
          _hover={{ bgColor: "gray.100" }}
          onClick={onToggle}
          bgColor={"white"}
          borderRadius={20}
          mb={-3}
        />
      </PopoverTrigger>
      <PopoverContent mr={2} shadow={"xl"}>
        <PopoverBody m={2} py={5}>
          <Stack spacing={5}>
            <Select variant="flushed" placeholder="Theme" />
            <Select variant="flushed" placeholder="city" />
            <CostRangeSlider name="Cost" max={2000} />
          </Stack>
        </PopoverBody>
        <PopoverFooter display="flex">
          <ButtonGroup size="sm">
            <Button variant="outline" onClick={onClose}>
              close
            </Button>
            <Button colorScheme={"blue"}>filter</Button>
          </ButtonGroup>
        </PopoverFooter>
      </PopoverContent>
    </Popover>
  );
};

export default PlacesFilter;
