import {
  Box,
  Step,
  StepDescription,
  StepIcon,
  StepIndicator,
  StepNumber,
  Stepper,
  StepSeparator,
  StepStatus,
  StepTitle,
  Text,
  useSteps,
} from "@chakra-ui/react";
const steps = [
  {
    title: "Umayyad Mosque:",
    description: " One of the oldest and most significant mosques in the world",
  },
  {
    title: "Souq Al-Hamidiyah:",
    description: "  A bustling market with a rich history.",
  },
  {
    title: "Azem Palace:",
    description: " A stunning example of Ottoman architecture, now a museum",
  },
  
  {
    title: "Via Recta:",
    description: " A historic street mentioned in the Bible",
  },
  {
    title: "Beit Al Mamlouka:",
    description: " A boutique hotel in the heart of the Old City",
  },
]
const StepperBox = () => {
  
  return (
    <Stepper
      index={-1}
      orientation="vertical"
      height="500px"
      marginTop={10}
      ml={10}
      color={"#EAB875"}
    >
      {steps.map((step, index) => (
        <Step key={index}>
          <StepIndicator
            fontWeight={"bold"}
            borderColor={"#EAB875"}
            color={"#7BC5C1"}
          >
            <StepStatus
              complete={<StepIcon />}
              incomplete={<StepNumber />}
              active={<StepNumber />}
            />
          </StepIndicator>

          <Box flexShrink="0">
            <StepTitle>
              <Text fontWeight={'bold'}>{step.title}</Text>
            </StepTitle>
            <StepDescription><Text fontSize={12}>{step.description} </Text></StepDescription>
          </Box>

          <StepSeparator />
        </Step>
      ))}
    </Stepper>
  );
};

export default StepperBox;
